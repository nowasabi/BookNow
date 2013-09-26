<table cellpadding="0" cellspacing="0" width="100%" class="table table-striped">
	<thead>
		<tr>
			<th><?php echo JText::_('COM_BOOKNOW_DETAILS'); ?></th>
			<th><?php echo JText::_('COM_BOOKNOW_STATUS'); ?></th>
			<th><?php echo JText::_('COM_BOOKNOW_ACTIONS'); ?></th>
		</tr>
	</thead>
	<tbody id="book-list">
		<?php for($i=0, $n = count($this->employees);$i<$n;$i++) {
		        $this->_employeeListView->employee = $this->employees[$i];
		        $this->_employeeListView->type = 'employee';
		        echo $this->_employeeListView->render();
		} ?>
	</tbody>
</table>