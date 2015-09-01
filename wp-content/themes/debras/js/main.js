// JavaScript Document
//select the first iframe that has a src that links to youtube
var firstIframe = document.querySelector('iframe[src^="//www.youtube"]');

//get the current source
var src = firstIframe.src;

//update the src with "autoplay=1"
var newSrc = src+'?autoplay=1';

//change iframe's src
firstIframe.src = newSrc;