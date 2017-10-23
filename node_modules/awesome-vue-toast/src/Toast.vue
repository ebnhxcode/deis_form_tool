<template>
  <div class="toast" :class="positionClass">

    <toast-transition>
      <div class="toast-message" v-for="m in messages" :class="messageTypeClass(m)" :key="m.id" role="note">
        <div class="toast-message-text">{{ m.text }}</div>
        <button class="toast-button" aria-label="Close" type="button" @click="close(m.id)"></button>
      </div>
    </toast-transition>

  </div>
</template>

<script>
import ToastTransition from './config'

const createMessage = function (id, text, type, dismissAfter) {
  return {
    id,
    text,
    type,
    dismissAfter
  }
}

export default {
  data () {
    return {
      messages: [],
      maxToastId: 0,
      dismissInterval: 5 * 1000
    }
  },
  props: {
    position: {
      validator (value) {
        return /^(:?n|s|nw|ne|sw|se)$/.test(value)
      },
      default: 'se'
    }
  },

  computed: {
    positionClass () {
      return `toast-position-${this.position}`
    }
  },

  methods: {
    showToast (message) {
      this.addMessage({ text: message })
    },
    addMessage ({ text, type = 'info', dismissAfter = this.dismissInterval }) {
      const id = ++this.maxToastId

      this.messages.push(createMessage(id, text, type, dismissAfter))
      setTimeout(() => this.removeMessage(id), dismissAfter)
      return id
    },
    removeMessage (id) {
      this.messages = this.messages.filter(m => m.id !== id)
    },
    close (id) {
      this.removeMessage(id)
    },
    messageTypeClass (message) {
      return `toast-type-${message.type}`
    }
  },

  components: {
    ToastTransition
  }
}
</script>

<style lang="stylus" scoped>
$width = 350px

.toast
  position: fixed
  width: calc(100% - 20px)
  max-width: $width
  z-index: 10000

.toast-message
  font-size: 1rem
  position: relative
  box-sizing: border-box
  margin-bottom: 10px
  padding: 15px
  width: 100%
  color: #fff
  transition: 400ms cubic-bezier(0.17, 0.67, 0.17, 0.98)
  transition-property: opacity, transform

.toast-button
  position: absolute
  top: 0
  right: 5px
  padding: 2px
  background-color: transparent
  border-width: 0
  font-size: 1.5rem
  color: inherit
  cursor: pointer

.toast-button::before
  content: '\d7'

/**
 * Transition
 */
.toast-enter-active,
.toast-leave
  opacity: 1

.toast-enter,
.toast-leave-active
  opacity: 0

.toast-leave-active
  position: absolute

/**
 * Position
 */
.toast-position-n
  top: 10px
  left: 50%
  margin-left: $width / -2

.toast-position-s
  bottom: 10px
  left: 50%
  margin-left: $width / -2

.toast-position-ne
  top: 10px
  right: 10px

.toast-position-nw
  top: 10px
  left: 10px

.toast-position-se
  bottom: 10px
  right: 10px

.toast-position-sw
  bottom: 10px
  left: 10px

/**
 * Transition with position
 */
.toast-position-n,
.toast-position-ne,
.toast-position-nw
  .toast-enter,
  .toast-leave-active
    transform: translateY(-20px)

.toast-position-s,
.toast-position-se,
.toast-position-sw
  .toast-enter
    transform: translateY(20px)

  .toast-leave-active
    transform: translateY(-100%) translateY(20px)

/**
 * Types
 */
.toast-type-info
  background-color: rgb(59, 120, 231, 0.8)

.toast-type-success
  background-color: #3add93

.toast-type-warning
  background-color: #efd700

.toast-type-danger
  background-color: #f3755e
</style>
