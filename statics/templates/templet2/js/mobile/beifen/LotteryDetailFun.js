$(function(){var a=function(){$("#divPeriod").touchslider();Base.getScript(Gobal.Skin+"/JS/GoodsPicSlider.js?v=130826",function(){$("#sliderBox").picslider()});$("div.pOngoing").click(function(){location.href="/product/"+$(this).attr("codeid")+".html"})};Base.getScript(Gobal.Skin+"/JS/PeriodSlider.js?v=130826",a)});