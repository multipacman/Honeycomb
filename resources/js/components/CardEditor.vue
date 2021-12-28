<template>
    <div>
        <textarea
            class="rounded-md shadow-card py-1 px-2 outline-none w-full text-gray-900 text-sm bg-white h-16 resize-none"
            placeholder="Enter title"
            v-model="title"
        >
        </textarea>
    </div>
</template>

<script>
export default {
    data() {
        return {
            title: null
        };
    }
};
</script>
