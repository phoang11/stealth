

const MainContent = {
  template: '#main-content',
  data() {
    return {
      title: null,
      body: null,
    }
  },
  created: function() {
    this.fetchData()
  },
  filters: {
    truncate: function(v) {
      var newline = v.indexOf('\n')
      return newline > 0 ? v.slice(0, newline) : v
    },
    formatDate: function(v) {
      return v.replace(/T|Z/g, ' ')
    }
  },
  methods: {
    fetchData: function() {
      var xhr = new XMLHttpRequest()
      var self = this
      xhr.open('GET', apiURL)
      xhr.onload = function() {
        nodes = JSON.parse(xhr.responseText)
        self.title = nodes[0].node['title'],
        self.body = nodes[0].node['Body']
        // console.log(self.nodes)
      }
      xhr.send()
    }
  }
};

var app = new Vue({
  el: '#stealthApp',
  data:{
    title: null,
    body: null
  },
  components: {
    'main-content': MainContent,
  },
})
