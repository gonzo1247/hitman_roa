<?php if (!defined('IN_PHPBB')) exit; echo (isset($this->_tpldata['DEFINE']['.']['LR_BLOCK_H_L'])) ? $this->_tpldata['DEFINE']['.']['LR_BLOCK_H_L'] : ''; if ($this->_tpldata['DEFINE']['.']['S_BLOCK_ICON']) {  ?><img src="<?php echo (isset($this->_tpldata['DEFINE']['.']['IMAGE_SRC'])) ? $this->_tpldata['DEFINE']['.']['IMAGE_SRC'] : ''; ?>" width="<?php echo (isset($this->_tpldata['DEFINE']['.']['IMAGE_WIDTH'])) ? $this->_tpldata['DEFINE']['.']['IMAGE_WIDTH'] : ''; ?>" height="<?php echo (isset($this->_tpldata['DEFINE']['.']['IMAGE_HEIGHT'])) ? $this->_tpldata['DEFINE']['.']['IMAGE_HEIGHT'] : ''; ?>" alt="" />&nbsp;<?php } echo (isset($this->_tpldata['DEFINE']['.']['TITLE'])) ? $this->_tpldata['DEFINE']['.']['TITLE'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['LR_BLOCK_H_R'])) ? $this->_tpldata['DEFINE']['.']['LR_BLOCK_H_R'] : ''; ?>

<div style="text-align: center;">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<div>
		<input type="hidden" name="cmd" value="_xclick" />
		<input type="hidden" name="business" value="<?php echo (isset($this->_rootref['PAY_ACC_SIDE'])) ? $this->_rootref['PAY_ACC_SIDE'] : ''; ?>" />
		<input type="hidden" name="item_name" value="<?php echo ((isset($this->_rootref['L_PAY_ITEM'])) ? $this->_rootref['L_PAY_ITEM'] : ((isset($user->lang['PAY_ITEM'])) ? $user->lang['PAY_ITEM'] : '{ PAY_ITEM }')); ?>" />
		<input type="hidden" name="no_note" value="1" />
		<input type="hidden" name="no_shipping" value="2" />
		<input type="hidden" name="bn" value="PP-DonationsBF" />
		<input type="hidden" name="tax" value="0" />
		<?php if ($this->_rootref['PAY_CUSTOM_SIDE']) {  ?>

		<input type="hidden" name="custom" value="<?php echo (isset($this->_rootref['PAY_CUSTOM_SIDE'])) ? $this->_rootref['PAY_CUSTOM_SIDE'] : ''; ?>">
		<?php } ?>

		<input type="text" tabindex="10" name="amount" size="10" maxlength="6" value="" class="inputbox autowidth" title="<?php echo ((isset($this->_rootref['L_PAY_MSG'])) ? $this->_rootref['L_PAY_MSG'] : ((isset($user->lang['PAY_MSG'])) ? $user->lang['PAY_MSG'] : '{ PAY_MSG }')); ?>" />
		<select name="currency_code" class="autowidth">
        	<option value="USD">USD</option>
			<option value="AUD">AUD</option>
			<option value="CAD">CAD</option>
			<option value="CZK">CZK</option>
			<option value="DKK">DKK</option>
			<option value="EUR" selected="selected">EUR</option>
			<option value="HKD">HKD</option>
			<option value="HUF">HUF</option>
			<option value="NZD">NZD</option>
			<option value="NOK">NOK</option>
			<option value="PLN">PLN</option>
			<option value="GBP">GBP</option>
			<option value="SGD">SGD</option>
			<option value="SEK">SEK</option>
			<option value="CHF">CHF</option>
			<option value="JPY">JPY</option>
		</select>
		<input type="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_DONATION'])) ? $this->_rootref['L_DONATION'] : ((isset($user->lang['DONATION'])) ? $user->lang['DONATION'] : '{ DONATION }')); ?>" class="button1" />
    </div>
</form>
</div>
<?php echo (isset($this->_tpldata['DEFINE']['.']['LR_BLOCK_F_L'])) ? $this->_tpldata['DEFINE']['.']['LR_BLOCK_F_L'] : ''; echo (isset($this->_tpldata['DEFINE']['.']['LR_BLOCK_F_R'])) ? $this->_tpldata['DEFINE']['.']['LR_BLOCK_F_R'] : ''; ?>