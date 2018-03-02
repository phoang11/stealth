

const MainContent = {
  template: '<div><header><h1 class="title">{{ title }}</h1></header><div v-html="body" class="content"></div></div>',
  data() {
    return {
      title: null,
      body: null,
      category: null,
      URL: null
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

  },
  methods: {
    fetchData: function() {
      var xhr = new XMLHttpRequest()
      var self = this
      xhr.open('GET', apiURL)
      xhr.onload = function() {
        nodes = JSON.parse(xhr.responseText)
        // console.log(nodes),
        self.title = nodes[0].node['title'],
        self.body = nodes[0].node['body'],
        self.URL = nodes[0].node['URL'],
        self.category = nodes[0].node['category']
      }
      xhr.send()
    }
  }
};

var app = new Vue({
  el: '#stealthApp',
  data:{
    search: '',
    title: null,
    body: null,
    category: null,
    URL: null
  },
  components: {
    'main-content': MainContent,
  },
})
