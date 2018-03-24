

var app = new Vue({
  el: '#stealthApp',
  data:{
    searchQuery: '',
    nodes:null
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
        self.nodes = JSON.parse(xhr.responseText)
        // console.log(self.nodes)
      }
      xhr.send()
    }
  }

})
