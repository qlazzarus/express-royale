# mongoose-post-find

This is a mongoose plugin to enable post find and findOne hooks to modify results before they are returned from Model.find, Model.findOne, and Model.find().exec.

## Usage

```javascript
postFind = require('mongoose-post-find')

YourSchema.plugin(postFind, {

  find: function(results, done) {
    //Do work on the results
    done(null, results) //Results must be passed to callback
  },

  //You can also pass in an array of post hooks, 
  //they will run in the order the array is in.
  findOne: [ 

    function(result, done) {
      //Do something to the result
      done(null, result)
    },

    function(result, done) {
      //Do something to the result
      done(null, result)
    }

  ]

})
```

Now you can use `Model.find` and `Model.findOne` just as you'd normally do.

```javascript
YourModel.find({}, function(err, results) {
  //Do things
})

YourModel.findOne({}).lean().sort('thing').exec(function(err, results) {
  //Do things
})
```

## License
Copyright (c) 2013 i.TV LLC

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
