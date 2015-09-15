<?php defined('G_IN_SYSTEM')or exit('No permission resources.'); ?><?php include templates("index","header");?>
<div class="main-content clearfix">
<?php include templates("member","left");?>
<link rel="stylesheet" type="text/css" href="<?php echo G_TEMPLATES_STYLE; ?>/css/layout-setUp.css"/>
<script type="text/javascript" src="<?php echo G_TEMPLATES_STYLE; ?>/js/passwordStrength-min.js"></script>
<script type="text/javascript">
$(function(){		
	var demo=$(".registerform").Validform({
		tiptype:2,
		usePlugin:{
			passwordstrength:{
				minLen:6,
				maxLen:20
			}
		}		
	});
})
</script>
<style>
#passqiang span{width:41px;}
</style>
<div class="R-content">
	<?php include templates("member","shezhi");?>
	<div class="pwdCon">
	<form class="registerform" method="post" action="<?php echo WEB_PATH; ?>/member/home/userpassword">
	<table border="0" cellpadding="0" cellspacing="0" align="center">
		<tbody>
			<tr>
				<td align="right"><label>第一次QQ登陆后的默认密码是: 123456</label></td>				
			</tr>
			
			<tr>
				<td align="right"><label>原密码：</label></td>
				<td><input name="password" sucmsg=" " ajaxurl="<?php echo WEB_PATH; ?>/member/home/oldpassword" datatype="*6-20" nullmsg="密码不能为空！" errormsg="密码范围在6~20位之间！"  type="password" class="pwd" maxlength="20"></td>
				<td id="lOldPass"><div class="Validform_checktip">请输入原密码</div></td>
			</tr>
			<tr>
				<td align="right"><label>新密码：</label></td>
				<td><input name="userpassword" plugin="passwordStrength" datatype="*6-20" nullmsg="密码不能为空！" errormsg="密码范围在6~20位之间！"  type="password" class="pwd" maxlength="20"></td>
				<td id="lNewPass"><div class="Validform_checktip">密码由6-20位字符</div></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><div id="passqiang" class="passwordStrength"><i style="float:left;">密码强度：</i><span>弱</span><span>中</span><span class="last">强</span></div></td>
			</tr>
			<tr>
				<td align="right"><label>再次输入新密码：</label></td>
				<td><input name="userpassword2" recheck="userpassword" sucmsg=" " datatype="*6-20" nullmsg="请再输入一次密码！" errormsg="您两次输入的账号密码不一致！" id="NewPassAgain" type="password" class="pwd" maxlength="20"></td>
				<td id="lNewPassAgain"><div class="Validform_checktip">请再输入一次密码！</div></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input id="btnSubmitSave" type="submit" class="bluebut" value="保存" ></td>
			</tr>
		</tbody>
	</table>
	</form>
	</div>
</div>
</div>
<?php include templates("index","footer");?>