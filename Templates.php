<div id="templates">
	<div class="tt-meeting">
		<div class="ttm-wrapper auto-center">
			<div class="ttm-time"></div>
			<div class="ttm-title"></div>
			<div class="ttm-client"></div>
		</div>
		<div class="ttm-close ui-icon ui-icon-close cmd-icon" title="<?=$LOCAL[33]?>"></div>
	</div>
	<div id="sm-message">
		<p><?=$LOCAL[34]?></p>
		<div class="sm-option">
			<input type="radio" name="sm-action" id="sms-1">
			<label for="sms-1">
				<div></div>
				<span><?=$LOCAL[37]?></span>
			</label>
		</div>
		<div class="sm-option">
			<input type="radio" name="sm-action" id="sms-2">
			<label for="sms-2">
				<div></div>
				<span><?=$LOCAL[36]?></span>
			</label>
		</div>
		<div class="sm-option">
			<input type="radio" name="sm-action" id="sms-3">
			<label for="sms-3">
				<div></div>
				<span><?=$LOCAL[35]?></span>
			</label>
		</div>
	</div>
	<div id="mm-picker">
		<label for="mm-input"><?=$LOCAL[38]?>:</label>
		<input id="mm-input">
	</div>
	<table id="fm-tr">
		<tr>
			<td>
				<input type="checkbox" class="auto-center">
			</td>
			<td class="fm-time"></td>
			<td class="fm-title"></td>
		</tr>
	</table>
	<div id="c-add-item">
		<div id="cai-close" class="ui-icon ui-icon-close" title="<?=$LOCAL[14]?>"></div>
		<div id="cai-title"></div>
		<form id="cai-form">
			<div id="cai-inputs"></div>
			<button class="ui-state-default"><?=$LOCAL[49]?></button>
		</form>
	</div>
	<div id="cr-print">
		<div class="f-close ui-icon ui-icon-close" title="<?=$LOCAL[14]?>"></div>
		<div id="crp-content">
			<h3><?=$LOCAL[63]?></h3>
			<ul>
				<li><?=$LOCAL[64]?>:
					<span id="crp-client"></span>
				</li>
				<li><?=$LOCAL[60]?>:
					<span id="crp-from"></span>
				</li>
				<li><?=$LOCAL[61]?>:
					<span id="crp-to"></span>
				</li>
			</ul>
			<div id="crp-table-wrap">
				<table id="crp-table" class="data-table">
					<thead>
						<tr>
							<th style="width: 25%"><?=$LOCAL[32]?></th>
							<th style="width: 25%"><?=$LOCAL[52]?></th>
							<th><?=$LOCAL[45]?></th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
			<div id="crp-total"></div>
		</div>
		<button class="ui-state-default"><?=$LOCAL[65]?></button>
	</div>
</div>