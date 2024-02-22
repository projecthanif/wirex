






var car = document.getElementById("Cardano")
var sol = document.getElementById("Solana")
var rip = document.getElementById("Ripple")
var pak = document.getElementById("Polkadot")
var chain = document.getElementById("Chainlink")
var ava = document.getElementById("Avalanche")
var algo = document.getElementById("Algorand")
var stell = document.getElementById("Stellar")
var uni = document.getElementById("Uniswap")
var ter = document.getElementById("Terra")





  var settings ={
    "async": true,
    "scrossDomain": true,
    "url": "https://api.coingecko.com/api/v3/simple/price?ids=Cardano%2CSolana%2CRipple%2CPolkadot%2CChainlink%2CAvalanche%2CAlgorand%2CStellar%2CUniswap%2CTerra&vs_currencies=usd",
    "method": "GET",
    "headers": {}

  }
  $.ajax(settings).done(function(response){
car.innerHTML = response.Cardano.usd
sol.innerHTML = response.Solana.usd
rip.innerHTML = response.Ripple.usd
pak.innerHTML = response.Polkadot.usd
chain.innerHTML = response.Chainlink.usd
ava.innerHTML = response.Avalanche.usd
algo.innerHTML = response.Algorand.usd
stell.innerHTML = response.Stellar.usd
uni.innerHTML = response.Uniswap.usd
ter.innerHTML = response.Terra.usd


  });
