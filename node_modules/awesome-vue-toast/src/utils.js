// @flow

/**
 * Simple update without mutation
 */
const update = function (obj, updater) {
  const res = {}
  Object.keys(obj).forEach(key => {
    res[key] = updater[key] === undefined ? obj[key] : updater[key]
  })
  return res
}

export default { update }
