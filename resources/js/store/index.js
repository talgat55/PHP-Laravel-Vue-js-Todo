export default {
    state: {
        groups: []
    },
    getters: {
        getGroups(state){

            return state.groups
        }
    },

    actions: {
        allGroups(context){

            axios.get("http://127.0.0.1:8000/api/v1/groups")

                .then((response)=>{
                    console.log(response.data);
                    context.commit("groups",response.data) ;

                })

                .catch(()=>{
                    console.log("Error........")
                })
        }
    },

    mutations: {
        groups(state,data) {
            return state.state = data
        }
    }
}
