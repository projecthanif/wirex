

var btc = document.getElementById("bitcoin1")
var eth = document.getElementById("ethereum1")
var doge = document.getElementById("dogecoin1")
var lit = document.getElementById("litecoin1")




  var settings ={
    "async": true,
    "scrossDomain": true,
    "url": "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Cethereum%2Cdogecoin%2Clitecoin&vs_currencies=usd",
    "method": "GET",
    "headers": {}

  }
  $.ajax(settings).done(function(response){
btc.innerHTML = response.bitcoin.usd
eth.innerHTML = response.ethereum.usd
doge.innerHTML = response.dogecoin.usd
lit.innerHTML = response.litecoin.usd

  });
