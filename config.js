var api = 'https://eland.namcoin.org';
var donationAddress = "";
var blockTargetInterval = 30;
var coinUnits = 1000000;
var symbol = 'nam';
var refreshDelay = 30000;
// pools stats by NamCoin
//NB do not include / at the end of url
var networkStat = {
 "nam": [
["mine.namcoin.org", "https://mine.namcoin.org:8119"],
["poolparty.namcoin.org", "https://partystats.namcoin.org"]
 ]
};

var networkStat2 = {
  "nam": [
    ["poolparty.namcoin.org", "https://partystats.namcoin.org"],

  ]
};

