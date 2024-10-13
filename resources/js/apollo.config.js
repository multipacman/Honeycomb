import Vue from "vue";
import ApolloClient from "apollo-boost";
import VueApollo from "vue-apollo";
import Cookies from "js-cookie";

Vue.use(VueApollo);
const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
const token = Cookies.get("XSRF-TOKEN");
const apolloClient = new ApolloClient({
    uri: "http://localhost:8000/graphql",
    headers: {
        "X-CSRF-TOKEN": csrfToken,
        // "Access-Control-Allow-Credentials": true,
        // authorization: `Bearer ${token}`,
        // "X-XSRF-TOKEN": token,
    },
    credentials: "include",
    onError: (err) => console.log(err),
});

export default new VueApollo({
    defaultClient: apolloClient,
});
