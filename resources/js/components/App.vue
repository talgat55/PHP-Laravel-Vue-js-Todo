<template>
    <v-app>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <v-form
                        ref="form"
                    >
                        <v-text-field
                            v-model="group"
                            label="Group"
                            required
                        ></v-text-field>
                        <div class="my-2">
                            <v-btn color="primary">Создать</v-btn>
                        </div>
                    </v-form>
                </div>
            </div>
        </div>
    </v-app>
</template>

<script>
    export default {
        name: "App",
        data: () => ({
            valid: true,
            group: '',
        })
    }
</script>
