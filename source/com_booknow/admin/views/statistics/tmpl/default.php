<div class="row-fluid">
    
<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['total_persons']; ?></span>
	<?php echo JText::_(' COM_BOOKNOW_STATISTICS_TOTAL_PERSONS'); ?>
</h3>
    
<div class="progress progress-success">
  <div class="bar" style="width: <?php echo $this->stats['total_persons'] > 100 ? $this->stats['total_persons'] / 100 : $this->stats['total_persons']; ?>%"></div>
</div>
<p><?php echo JText::_(' COM_BOOKNOW_STATISTICS_TOTAL_PERSONS_DESC'); ?></p>
</div>
    
<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['total_services']; ?></span>
	<?php echo JText::_(' COM_BOOKNOW_STATISTICS_TOTAL_SERVICES'); ?>
</h3>
<div class="progress progress-success">
  <div class="bar" style="width: <?php echo $this->stats['total_services'] > 100 ? $this->stats['total_services'] / 100 : $this->stats['total_services']; ?>%"></div>
</div>
<p><?php echo JText::_(' COM_BOOKNOW_STATISTICS_TOTAL_SERVICES_DESC'); ?></p>
</div>

<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['total_loaned']; ?></span>
	<?php echo JText::_(' COM_BOOKNOW_STATISTICS_TOTAL_LENT'); ?>
</h3>
<div class="progress progress-success">
  <div class="bar" style="width: <?php echo $this->stats['total_loaned'] > 100 ? $this->stats['total_loaned'] / 100 : $this->stats['total_loaned']; ?>%"></div>
</div>
<p><?php echo JText::_(' COM_BOOKNOW_STATISTICS_TOTAL_LENT_DESC'); ?></p>
</div>
</div>
    
    
<br />
<div class="row-fluid">
<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['total_services']; ?></span>
	<?php echo JText::_(' COM_BOOKNOW_STATISTICS_ total_services'); ?>
</h3>
<div class="progress progress-info">
  <div class="bar" style="width: <?php echo $this->stats['total_services'] > 100 ? $this->stats['total_services'] / 100 : $this->stats['total_services']; ?>%"></div>
</div>
<p><?php echo JText::_(' COM_BOOKNOW_STATISTICS_total_services_DESC'); ?></p>
</div>

<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['total_services']; ?></span>
	<?php echo JText::_(' COM_BOOKNOW_STATISTICS_total_services'); ?>
</h3>
<div class="progress progress-info">
  <div class="bar" style="width: <?php echo $this->stats['total_services'] > 100 ? $this->stats['total_services'] / 100 : $this->stats['total_services']; ?>%"></div>
</div>
<p><?php echo JText::_(' COM_BOOKNOW_STATISTICS_total_services_DESC'); ?></p>
</div>

<div class="span4 thumbnail">
<h3>
	<span class="label label-info pull-right"><?php echo $this->stats['total_services']; ?></span>
	<?php echo JText::_(' COM_BOOKNOW_STATISTICS_total_services'); ?>
</h3>
<div class="progress progress-info">
  <div class="bar" style="width: <?php echo $this->stats['total_services'] > 100 ? $this->stats['total_services'] / 100 : $this->stats['total_services']; ?>%"></div>
</div>
<p><?php echo JText::_(' COM_BOOKNOW_STATISTICS_total_services_DESC'); ?></p>
</div>


</div>