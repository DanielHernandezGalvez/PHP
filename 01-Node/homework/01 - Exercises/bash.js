const process = require('process');
const { Z_ASCII } = require('zlib');
const commands = require('./commands/index.js');

function bash() {
   process.stdout.write("propmt > ")
   process.stdin.on("data", function(data){
      let args = data.toString().split(" ", "");
      let cmd = args[0]
   })
}

function print(output) {
   process.stdout.write(output)
   process.stdout.write("\nprompt > ")
}

bash();
module.exports = {
   print,
   bash,
};
