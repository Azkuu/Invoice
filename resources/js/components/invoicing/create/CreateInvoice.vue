<template>
    <div>
        <div class="row">
            <div class="col-5">
                <div class="form-group">
                    <label for="">Invoice ID</label>
                    <input type="text" class="form-control" name="id" />
                </div>
                <div class="form-group">
                    <label for="">Issue Date</label>
                    <input type="date" class="form-control" name="issue_date" />
                </div>
                <div class="form-group">
                    <label for="">Due Date</label>
                    <input type="date" class="form-control" name="due_date" />
                </div>
                <div class="form-group">
                    <label for="">Subject</label>
                    <input type="text" class="form-control" name="subject" />
                </div>
                .
            </div>
            <div class="col-5 offset-2">
                <h5>From</h5>
                <hr />

                <div class="form-group row">
                    <label for="" class="col-3">From</label>
                    <div class="col-9">
                        <input
                            type="text"
                            class="form-control"
                            name="from_name"
                            v-model="company.name"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Address</label>
                    <div class="col-9">
                        <input
                            type="text"
                            class="form-control"
                            name="from_address"
                            v-model="company.address"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Postal Code</label>
                    <div class="col-9">
                        <input
                            type="text"
                            class="form-control"
                            name="from_postal_code"
                            v-model="company.postal_code"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">City</label>
                    <div class="col-9">
                        <input
                            type="text"
                            class="form-control"
                            name="from_city"
                            v-model="company.city"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Province</label>
                    <div class="col-9">
                        <input
                            type="text"
                            class="form-control"
                            name="from_province"
                            v-model="company.province"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Country</label>
                    <div class="col-9">
                        <input
                            type="text"
                            class="form-control"
                            name="from_country"
                            v-model="company.country"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Email</label>
                    <div class="col-9">
                        <input
                            type="text"
                            class="form-control"
                            name="from_email"
                            v-model="company.email"
                        />
                    </div>
                </div>

                <h5>
                    For

                    <span
                        class="btn btn-sm btn-primary float-right"
                        data-toggle="modal"
                        data-target="#customersModal"
                        >Customer</span
                    >
                    <span
                        class="btn btn-sm btn-warning float-right mr-2"
                        v-on:click="clearCustomerData"
                    >
                        Clear</span
                    >
                </h5>
                <hr />

                <input type="hidden" name="for_id" v-model="customer.id" />

                <div class="form-group row">
                    <label for="" class="col-3">For</label>
                    <div class="col-9">
                        <input
                            type="text"
                            class="form-control"
                            name="for_name"
                            v-model="customer.name"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Address</label>
                    <div class="col-9">
                        <input
                            type="text"
                            class="form-control"
                            name="for_address"
                            v-model="customer.address_1"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Postal Code</label>
                    <div class="col-9">
                        <input
                            type="text"
                            class="form-control"
                            name="for_postal_code"
                            v-model="customer.postal_code"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">City</label>
                    <div class="col-9">
                        <input
                            type="text"
                            class="form-control"
                            name="for_city"
                            v-model="customer.city"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Province</label>
                    <div class="col-9">
                        <input
                            type="text"
                            class="form-control"
                            name="for_province"
                            v-model="customer.province"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Country</label>
                    <div class="col-9">
                        <input
                            type="text"
                            class="form-control"
                            name="for_country"
                            v-model="customer.country"
                        />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Email</label>
                    <div class="col-9">
                        <input
                            type="text"
                            class="form-control"
                            name="for_email"
                            v-model="customer.email"
                        />
                    </div>
                </div>
            </div>
            <!-- /.col-5 .offset-2 -->
        </div>
        <hr />
        <!-- /.row -->

        <InvoiceItems></InvoiceItems>

        <CustomerModal
            v-on:customerSelected="assignCustomerData($event)"
        ></CustomerModal>
    </div>
</template>

<script>
import CustomerModal from "./partials/CustomerModal.vue";
import InvoiceItems from "./partials/InvoiceItems.vue";

export default {
    mounted() {
        this.getCompany();
    },
    components: {
        CustomerModal: CustomerModal,
        InvoiceItems: InvoiceItems
    },
    data() {
        return {
            company: {
                name: "",
                address: "",
                city: "",
                province: "",
                postal_code: "",
                country: "",
                email: ""
            },
            customer: {
                id: "",
                name: "",
                address_1: "",
                postal_code: "",
                city: "",
                province: "",
                country: "",
                email: ""
            }
        };
    },
    methods: {
        getCompany() {
            axios.get("/admin/company/data/details").then(response => {
                // console.log(response.data.company);
                this.company = response.data.company;
            });
        },
        assignCustomerData(customer) {
            this.customer.id = customer.id;
            this.customer.name = customer.name;
            this.customer.address_1 = customer.address_1;
            this.customer.postal_code = customer.postal_code;
            this.customer.city = customer.city;
            this.customer.province = customer.province;
            this.customer.country = customer.country;
            this.customer.email = customer.email;
        },
        clearCustomerData() {
            this.customer.id = "";
            this.customer.name = "";
            this.customer.address_1 = "";
            this.customer.postal_code = "";
            this.customer.city = "";
            this.customer.province = "";
            this.customer.country = "";
            this.customer.email = "";
        }
    }
};
</script>
