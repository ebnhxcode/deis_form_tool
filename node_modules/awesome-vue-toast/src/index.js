import Vue from 'vue'
import ToastInst from './Toast'
// import { update } from './utils'

/* const createComponent = function (options = {}) {
  const { transition } = options

  return update(Toast, {
    components: {
      toastTransition: transition
    }
  })
} // */

document.body.insertAdjacentHTML('beforeend', '<div id="toast"></div>')

const Toast = new Vue(
  Object.assign({}, ToastInst, { // app body
    el: '#toast'
  })
)

module.exports = Toast

