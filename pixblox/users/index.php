<?php

$user = $_GET['user'];

?>

<!DOCTYPE html>

<html>
	<head>
<title>
	ROBLOX 2D: A FREE Demake of old ROBLOX
</title><link rel="stylesheet" type="text/css" href="../assets/style/style.css"/><link id="ctl00_Favicon" rel="Shortcut Icon" type="image/ico" href="/assets/images/icon.ico"/>
	<body>
		<form name="aspnetForm" method="post" action="Default.aspx" id="aspnetForm">
<input type="hidden" name="ctl00_ScriptManager1_HiddenField" id="ctl00_ScriptManager1_HiddenField" value=""/>

			<div id="Container">

				<div id="Header">
					<div id="Banner">
						<div id="Options">
							<div id="Authentication">
								<span><a id="ctl00_lsLoginStatus" href="javascript:__doPostBack('ctl00$lsLoginStatus$ctl02','')">Login</a></span>
							</div>
							<div id="Settings">
								<span id="ctl00_lSettings"></span>
							</div>
						</div>
						<div id="Logo"><a id="ctl00_rbxImage_Logo" title="ROBLOX" href="/" style="display:inline-block;cursor:pointer;"><img src="../assets/images/logo.png" border="0" id="img" alt="ROBLOX 2D" blankurl="http://t2.roblox.com:80/blank-267x70.gif"/></a>
						</div>
						<div id="Alerts"><table style="width:100%;height:100%"><tr><td valign="middle"><a id="ctl00_rbxAlerts_SignupAndPlayHyperLink" class="SignUpAndPlay" href="Login/New.aspx?ReturnUrl=%2fGames.aspx"><img src="../assets/images/signupbutton.png" alt="Sign-up and Play!" border="0"/></a>

</td></tr></table></div>
					</div>
					<div class="Navigation">
					<span class="Separator">&nbsp;|&nbsp;</span>
						<span><a id="ctl00_hlMyRoblox" class="MenuItem" href="/me">Profile</a></span>
						<span class="Separator">&nbsp;|&nbsp;</span>
						<span><a id="ctl00_hlGames" class="MenuItem" href="/places">Places</a></span>
						<span class="Separator">&nbsp;|&nbsp;</span>
						<span><a id="ctl00_hlCatalog" class="MenuItem" href="/shop">Shop</a></span>
						<span class="Separator">&nbsp;|&nbsp;</span>
						<span><a id="ctl00_hlBrowse" class="MenuItem" href="/users?user=0">Users</a></span>
						<span class="Separator">&nbsp;|&nbsp;</span>
 					</div>
				</div>
				<div id="Body">

					<div id="UserContainer">
							<div id="LeftBank">
								<div id="ctl00_cphRoblox_pProfile">

									<div id="ProfilePane">

					<table width="100%" bgcolor="lightsteelblue" cellpadding="6" cellspacing="0">
					    <tr>
					        <td>
					            <span id="ctl00_cphRoblox_rbxUserPane_lUserName" class="Title">USERNAME</span><br/>
					            <span id="ctl00_cphRoblox_rbxUserPane_lUserOnlineStatus" class="UserOfflineMessage">[ Offline ]</span>
					        </td>
					    </tr>
					    <tr>
					        <td>
					            <span id="ctl00_cphRoblox_rbxUserPane_lUserRobloxURL">USERNAME's roblox</span><br/>
					            <a id="ctl00_cphRoblox_rbxUserPane_hlUserRobloxURL" href="../users?user=<?php echo $user; ?>">http://www.roblox2dgame.com/users?user=<?php echo $user; ?></a><br/>
					            <br/>
					            <div style="left: 0px; float: left; position: relative; top: 0px">
					                <a id="ctl00_cphRoblox_rbxUserPane_Image1" disabled="disabled" title="USERNAME" onclick="return false" style="display:inline-block;"><img src="/assets/images/av/<?php echo $user; ?>/avatar.png" border="0" id="img" alt="USERNAME" blankurl="http://t7.roblox.com:80/blank-180x220.gif" width=400% height=400% /></a><br/>
					                <div id="ctl00_cphRoblox_rbxUserPane_AbuseReportButton1_AbuseReportPanel" class="ReportAbusePanel">

					    <span class="AbuseIcon"><a id="ctl00_cphRoblox_rbxUserPane_AbuseReportButton1_ReportAbuseIconHyperLink" href="../report?type=0?id=0"><img src="../assets/images/report_flag.png" alt="Report Abuse" border="0"/></a></span>
					    <span class="AbuseButton"><a id="ctl00_cphRoblox_rbxUserPane_AbuseReportButton1_ReportAbuseTextHyperLink" href="../report?type=0?id=0">Report Abuse</a></span>

						</div>
					            </div>



					<p></p>
					<p><a id="ctl00_cphRoblox_rbxUserPane_rbxPublicUser_hlAddFriend" href="My/FriendInvitation.aspx?RecipientID=1">Send Buddy Request</a></p>
					<p><span id="ctl00_cphRoblox_rbxUserPane_rbxPublicUser_lBlurb">User's description goes here</span></p>					        </td>
					    </tr>
					</table>

									</div>

					</div>
							</div>
							<div id="RightBank">
								<div id="ctl00_cphRoblox_pUserPlacesPane">

									<div id="UserPlacesPane">

					<div id="UserPlaces">

					    	<div id="ctl00_cphRoblox_rbxUserPlacesPane_aUserPlaces">
							<input type="hidden" name="ctl00$cphRoblox$rbxUserPlacesPane$aUserPlaces_AccordionExtender_ClientState" id="ctl00_cphRoblox_rbxUserPlacesPane_aUserPlaces_AccordionExtender_ClientState" value="0"/><div class="AccordionHeader">

								<span id="ctl00_cphRoblox_rbxUserPlacesPane_ctl01_lPlaceName">Place</span>

							</div><div style="display:block;">



					<div class="Place">
					    <div class="PlayStatus">
					        <span id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyLocked" style="display: none"><img id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_rbxPlaceAccessIndicator_iFriendsOnly_Locked" src="/web/20080224011958im_/http://www.roblox.com/images/locked.png" border="0"/>&nbsp;Friends-only</span>
					<span id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_rbxPlaceAccessIndicator_FriendsOnlyUnlocked" style="display: none"><img id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_rbxPlaceAccessIndicator_iFriendsOnly_Unlocked" src="/web/20080224011958im_/http://www.roblox.com/images/unlocked.png" border="0"/>&nbsp;Friends-only: You have access</span>
					<span id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_rbxPlaceAccessIndicator_Public" style="display:inline;"><img id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_rbxPlaceAccessIndicator_iPublic" src="/web/20080224011958im_/http://www.roblox.com/images/public.png" border="0"/>&nbsp;Public</span>

					    </div>
					    <div class="PlayOptions">
					        <span id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_rbxVisitButtons_VisitMPButton">
					<input type="hidden" name="ctl00$cphRoblox$rbxUserPlacesPane$ctl02$rbxPlatform$rbxVisitButtons$PlaceLauncher1$HiddenField1" id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_rbxVisitButtons_PlaceLauncher1_HiddenField1"/>


					    <button id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_rbxVisitButtons_hlMultiplayerVisit" class="Button" onclick="window.location = '../launch?gameid=0?solo=0'; return false;">Visit Online</button>
					</span>
					<span id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_rbxVisitButtons_VisitButton">
						&nbsp;&nbsp;&nbsp;<button id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_rbxVisitButtons_hlSoloVisit" class="Button" onclick="window.location = '../launch?gameid=0?solo=1'; return false;">Visit Alone</button>
					</span>

					    </div>
					    <div class="Statistics">
					        <span id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_lStatistics">Visited 0 times (0 last week)</span></div>
					    <div class="Thumbnail">
					        <a id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_rbxPlaceThumbnail" disabled="disabled" title="Rocket Arena" href="../places/place.php?place_id=0" style="display:inline-block;"><img src="../assets/images/unknown_item.png" border="0" id="img" alt="Place" width=420px height=230px /></a>
					    </div>
					    <div id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_pDescription">

					        <div class="Description">
					            <span id="ctl00_cphRoblox_rbxUserPlacesPane_ctl02_rbxPlatform_lDescription">a place for testing</span>
					        </div>

								</div>

					</div>


							</div>
						</div>
					 </div>
									</div>

					</div>
								<div id="ctl00_cphRoblox_pFriends">

									<div id="FriendsPane">


					<div id="Friends">
						<h4>USERNAME's Buddys</h4>

						<table id="ctl00_cphRoblox_rbxFriendsPane_dlFriends" cellspacing="0" align="Center" border="0">
							<tr>
								<td>
								<div class="Friend">
									<div class="Avatar"><a id="ctl00_cphRoblox_rbxFriendsPane_dlFriends_ctl00_hlAvatar" title="FRIEND" href="../users?userid=2" style="display:inline-block;cursor:pointer;"><img src="../assets/images/av_load.png" border="0" id="img" alt="FRIEND" blankurl="http://t6.roblox.com:80/blank-100x100.gif"width=200% height=200% /></a></div>
									<div class="Summary">
										<span class="Name"><a id="ctl00_cphRoblox_rbxFriendsPane_dlFriends_ctl00_hlFriend" href="User.aspx?ID=169">FRIEND</a></span>
									</div>
								</div>
							</td>
						</table>

					</div>
									</div>

					</div>
							</div>

							<div id="ctl00_cphRoblox_pUserModels">

								<div id="UserModelsContainer">
									<span id="ctl00_cphRoblox_lModelsHeader" class="Title">Models</span>
									<table cellspacing="0" cellpadding="3" rules="rows" sortascending="True" bordercolor="#CCCCCC" border="1" id="ctl00_cphRoblox_rbxContentGrid_Models_Smartdatagrid1" bgcolor="White" width="100%">
							<tr class="GridHeader">
								<td>Name</td><td>Date</td>
							</tr><tr class="GridItem" valign="top">
								<td>
									<a id="ctl00_cphRoblox_rbxContentGrid_Models_Smartdatagrid1_ctl03_HyperLinkImage" href="../create/models?assetid=0" style="display:inline-block;LEFT:0px;FLOAT:left;POSITION:relative;TOP:0px;cursor:pointer;"><img src="../assets/images/unknown_item.png" border="0" id="img" alt blankurl="http://t6.roblox.com:80/blank-64x64.gif"/></a>
									<a id="ctl00_cphRoblox_rbxContentGrid_Models_Smartdatagrid1_ctl03_HyperLinkName" href="../create/models?assetid=0">[insert a model name here]</a>
									<br/>
									<span id="ctl00_cphRoblox_rbxContentGrid_Models_Smartdatagrid1_ctl03_LabelDescription" class="GridItem">Placeholder</span>
								</td><td>
									<span class="GridItem">mm/dd/yyyy</span>
								</td>
							</tr>
						</table>
								</div>

					</div>
							<div id="ctl00_cphRoblox_pUserAssets">

								<div id="UserAssetsPane">
									<div id="ctl00_cphRoblox_rbxUserAssetsPane_upUserAssetsPane">

							<div id="UserAssets">
								<h4>Stuff</h4>
								<div id="AssetsMenu">

											<div id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl00_AssetCategorySelectorPanel" class="AssetsMenuItem_Selected">
								<a id="ctl00_cphRoblox_rbxUserAssetsPane_AssetCategoryRepeater_ctl00_AssetCategorySelector" class="AssetsMenuButton_Selected" href="javascript:__doPostBack('ctl00$cphRoblox$rbxUserAssetsPane$AssetCategoryRepeater$ctl00$AssetCategorySelector','')">Hats</a>
							</div>

								</div>
								<div id="AssetsContent">
									<table id="ctl00_cphRoblox_rbxUserAssetsPane_UserAssetsDataList" cellspacing="0" border="0">
								<tr>
									<td class="Asset" valign="top">
										    <div style="padding:5px">
											<div class="AssetThumbnail">
												<a id="ctl00_cphRoblox_rbxUserAssetsPane_UserAssetsDataList_ctl00_AssetThumbnailHyperLink" title="Test Hat" href="../shop/item?id=0" style="display:inline-block;cursor:pointer;"><img src="../assets/images/unknown_item.png" border="0" id="img" alt="Official's Hat" width=110px height=110px/></a>
											</div>
											<div class="AssetDetails">
												<div class="AssetName"><a id="ctl00_cphRoblox_rbxUserAssetsPane_UserAssetsDataList_ctl00_AssetNameHyperLink" href="Item.aspx?ID=1396360&amp;UserAssetID=897325">Test Hat</a></div>
												<div class="AssetCreator"><span class="Label">Creator:</span> <span class="Detail"><a id="ctl00_cphRoblox_rbxUserAssetsPane_UserAssetsDataList_ctl00_GameCreatorHyperLink" href="User.aspx?ID=1">ADMIN</a></span></div>


											</div>
										</td>
								</tr>
								<div style="clear:both;"></div>
							</div>

						</div>
								</div>

					</div>
						</div>


									</div>
									<div id="Footer">

					<hr/>
</script>
</form>
	</body>
</html>
