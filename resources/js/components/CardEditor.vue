<template>
    <div>
        <textarea
            class="rounded-md shadow-card py-1 px-2 outline-none w-full text-gray-900 text-sm bg-white h-16 resize-none"
            placeholder="Enter title"
            :value="value"
            ref="card"
            @keyup.esc="closed"
            @keyup.enter="saved"
            @input="$emit('input', $event.target.value)"
        >
        </textarea>

        <div class="flex justify-between">
            <button
                @click="saved"
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
export default {
    props: ["value"],
    mounted() {
        this.$refs.card.focus();
    },
    methods: {
        closed() {
            this.$emit("closed");
        },
        saved() {
            this.$emit("saved");
        }
    }
};
</script>
