<template>
  <div>
    <h1>Test Ground Other Tab</h1>
    <h2>{{subh}}</h2>
    <v-btn
      color="warning"
      class="mr-4"
      @click="emitSomething"
    >
      EMIT
    </v-btn>
    <slot>Default Slot</slot>
    <slot name="Links"></slot>
  </div>
</template>

<script>
export default {
  props: ['subh'],

  methods: {
    emitSomething() {
      this.$emit('something');
      console.log("emit");
    }
  }
}
</script>