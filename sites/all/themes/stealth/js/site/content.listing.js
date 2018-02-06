/**
 * Pull content app.
 */

var app = new Vue({

  el: '#stealthApp',

  data: {
    items: null
  },

  created: function () {
    this.fetchData()
  },

  methods: {
    fetchData: function () {
      var xhr = new XMLHttpRequest()
      var self = this
      xhr.open('GET', apiURL)
      xhr.onload = function () {
        self.items = JSON.parse(xhr.responseText)
        // console.log(self.items)
      }
      xhr.send()
    }
  }
})
