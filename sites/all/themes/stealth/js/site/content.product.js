/**
 * Pull content app.
 */

var app = new Vue({

  el: '#stealthApp',

  data: {
    title: null,
    subTitle: null,
    body: null,
    imageSRC:null,
    imageALT:null
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
        var item = JSON.parse(xhr.responseText)
        self.title = item[0].title,
        self.subTitle = item[0].subTitle,
        self.body = item[0].body
        if (item[0]['image']) {
          self.imageSRC = item[0]['image'].src,
          self.imageALT = item[0]['image'].alt
        }
      }
      xhr.send()
    }
  }
})
