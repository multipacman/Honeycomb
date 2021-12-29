<template>
    <div>
        <textarea
            class="rounded-md shadow-card py-1 px-2 outline-none w-full text-gray-900 text-sm bg-white h-16 resize-none"
            placeholder="Enter title"
            v-model="title"
            ref="card"
            @keyup.esc="closed"
            @keyup.enter="addCard"
        >
        </textarea>

        <div class="flex justify-between">
            <button
                @click="addCard"
                class="rounded-md py-1 px-3 bg-yellow-700 text-white cursor-pointer hover:bg-yellow-600 outline-none"
            >
                Add Card
            </button>
            <button
                class="py-1 px-1 rounded-md hover:bg-gray-400 cursor-pointer text-gray-500"
                @click="closed"
            >
                Close
            </button>
        </div>
    </div>
</template>

<script>
import CardAdd from "./../graphql/CardAdd.gql";
import BoardQuery from "./../graphql/BoardsWithListsAndCards.gql";
import { EVENT_CARD_ADDED } from "./../constants";

export default {
    props: {
        list: Object
    },
    data() {
        return {
            title: null
        };
    },
    mounted() {
        this.$refs.card.focus();
    },
    methods: {
        addCard() {
            const self = this;
            this.$apollo.mutate({
                mutation: CardAdd,
                variables: {
                    title: this.title,
                    listId: this.list.id,
                    order: this.list.cards.length + 1
                },
                update(store, { data: { cardAdd } }) {
                    self.$emit("added", {
                        store,
                        data: cardAdd,
                        type: EVENT_CARD_ADDED
                    });
                    self.closed();
                }
            });
        },
        closed() {
            this.$emit("closed");
        }
    }
};
</script>
