<div>
			<script type="text/javascript">
			var obj;
			function JSONscriptRequest(fullUrl){
			this.fullUrl=fullUrl;
			this.noCacheIE='&noCacheIE=' + (new Date()).getTime();
			if(document.getElementsByTagName("head").item(0) == null){
			this.headLoc=document.getElementsByTagName("html").item(0);}else{
			this.headLoc=document.getElementsByTagName("head").item(0);}
			this.scriptId='JscriptId' + JSONscriptRequest.scriptCounter++;}
			JSONscriptRequest.scriptCounter=1;
			JSONscriptRequest.prototype.buildScriptTag=function(){
			this.scriptObj=document.createElement("script");
			this.scriptObj.setAttribute("type", "text/javascript");
			this.scriptObj.setAttribute("charset", "utf-8");this.scriptObj.setAttribute("src", this.fullUrl + this.noCacheIE);
			this.scriptObj.setAttribute("id", this.scriptId);};
			JSONscriptRequest.prototype.removeScriptTag=function(){
			this.headLoc.removeChild(this.scriptObj);};
			JSONscriptRequest.prototype.addScriptTag=function(){
			this.headLoc.appendChild(this.scriptObj);};
			function addScript(){
			obj=new JSONscriptRequest('https://www.experts-exchange.com/jsp/expertBadgeUpdate.jsp?q=z6y6tN2STh0=&bs=gNF5onwr908hn0gttZonwr908hn0gttiT4c=&fzn=rTwknf9iqfQ=&szn=fIy00C0YZ1k=&tzn=M4R7SVs1onwr908hn0gtt0X5K6ulPsmNFQ==&cid=YWpSeXIXAeE=');
			obj.buildScriptTag();
			obj.addScriptTag();}
			</script>
			<link rel="stylesheet" href="https://cdn.experts-exchange.com/css/2/badge.css" media="all" />
			<!--[if lte IE 6]><div class="IE"><![endif]-->
			<div id="pageMain">
			<div id="mediumCustomImage" class="mediumCustomImage">
			<div class="mediumBadgeContainer">
			<div class="mediumBadgeFloatLeft">
			<div id="certifiedExpertEEpleMedium" class="certifiedExpertEEpleMedium"></div>
			</div>
			<div class="mediumBadgeFloatRight">
			<div id="certifiedExpertNameMedium" class="certifiedExpertNameMedium"></div>
			<div id="certifiedExpertMemberSinceMedium" class="certifiedExpertMemberSinceMedium"></div>
			<div id="certifiedExpertZoneRankMedium" class="certifiedExpertZoneRankMedium"></div>
			</div>
			<div class="certifiedExpertClearBoth"></div>
			<div id="certifiedExpertZonesMedium" class="certifiedExpertZonesMedium">
			<div class="positionAbsolute">
			<div class="maginBottom"><span id="certifiedExpertZoneRankMedium1" class="certifiedExpertZoneRankMediumTd">#1  </span><span id="certifiedExpertZoneMedium1" class="certifiedExpertZoneMedium"></span></div>
			<div class="maginBottom"><span id="certifiedExpertZoneRankMedium2" class="certifiedExpertZoneRankMediumTd">#2  </span><span id="certifiedExpertZoneMedium2" class="certifiedExpertZoneMedium"></span></div>
			<div class="maginBottom"><span id="certifiedExpertZoneRankMedium3" class="certifiedExpertZoneRankMediumTd">#3  </span><span id="certifiedExpertZoneMedium3" class="certifiedExpertZoneMedium"></span></div>
			</div>
			</div>
			<div class="certifiedExpertStatisticsMedium">
			<div id="certifiedExpertQuestionsAnsweredMedium" class="certifiedExpertMediumPosition">
			<div class="certifiedExpertFloatLeft">Questions Answered</div>
			<div id="certifiedExpertQuestionsAnsweredDataMedium" class="certifiedExpertDataMedium"></div>
			<div class="certifiedExpertClearBoth"></div>
			</div>
			<div id="certifiedExpertArticlesWrittenMedium" class="certifiedExpertMediumPosition" style="display:none;">
			<div class="certifiedExpertFloatLeft">Articles Written</div>
			<div id="certifiedExpertArticlesWrittenDataMedium" class="certifiedExpertDataMedium"></div>
			<div style="clear:both;"></div>
			</div>
			<div id="certifiedExpertPointsMedium" class="certifiedExpertMediumPosition">
			<div class="certifiedExpertFloatLeft">Overall Points</div>
			<div id="certifiedExpertPointsDataMedium" class="certifiedExpertDataMedium"></div>
			<div class="certifiedExpertClearBoth"></div>
			</div>
			</div>
			</div>
			<div id="expertBadgesBottomLogoMedium"><a target="_blank" href="https://www.experts-exchange.com?cid=2289"><img src="https://www.experts-exchange.com/images/experts-exchange/badge-med-bg.png" border="0" /></a></div>
			</div>
			</div><!--[if lte IE 6]></div><![endif]-->
			<script type="text/javascript">
			function take(data){
			if(data==null){alert('Error accessing data');}
			document.getElementById('certifiedExpertNameMedium').innerHTML="<a class='expertBadgesLinks' target='_blank' href='https://www.experts-exchange.com/members/kiranvj.html?cid=2289'>" + data.memberName + "</a>";
			document.getElementById('certifiedExpertArticlesWrittenDataMedium').innerHTML=data.memberArticlesWritten;
			document.getElementById('certifiedExpertPointsDataMedium').innerHTML=data.memberTotalPoints;
			document.getElementById('certifiedExpertQuestionsAnsweredDataMedium').innerHTML=data.memberQuestionsAnswered;
			document.getElementById('certifiedExpertMemberSinceMedium').innerHTML='MEMBER SINCE ' + data.memberSinceDate;
			document.getElementById('certifiedExpertZoneRankMedium').innerHTML=data.memberZoneRank;
			document.getElementById('certifiedExpertEEpleMedium').innerHTML=data.eeple;
			document.getElementById('certifiedExpertZoneMedium1').innerHTML="<a class='expertBadgesLinksForZones' target='_blank' href='https://www.experts-exchange.com" + data.memberZoneDefaultPath1 + "?cid=2289'>" + data.memberZoneRank1 + "</a>";
			document.getElementById('certifiedExpertZoneMedium2').innerHTML="<a class='expertBadgesLinksForZones' target='_blank' href='https://www.experts-exchange.com" + data.memberZoneDefaultPath2 + "?cid=2289'>" + data.memberZoneRank2 + "</a>";
			document.getElementById('certifiedExpertZoneMedium3').innerHTML="<a class='expertBadgesLinksForZones' target='_blank' href='https://www.experts-exchange.com" + data.memberZoneDefaultPath3 + "?cid=2289'>" + data.memberZoneRank3 + "</a>";
			}
			addScript();
			</script>
		</div>