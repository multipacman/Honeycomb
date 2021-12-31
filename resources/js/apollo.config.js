import Vue from "vue";
import ApolloClient from "apollo-boost";
import VueApollo from "vue-apollo";

Vue.use(VueApollo);
const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
const apolloClient = new ApolloClient({
    uri: "http://localhost:8000/graphql",
    headers: {
        "X-CSRF-TOKEN": csrfToken,
    },
    credentials: "include",
    onError: (err) => console.log(err),
});

export default new VueApollo({
    defaultClient: apolloClient,
});
