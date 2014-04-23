<td colspan="3">
  <?php echo __('%%id%% - %%name%% - %%slug%%', array('%%id%%' => link_to($JobeetCategory->getId(), 'jobeet_category_edit', $JobeetCategory), '%%name%%' => $JobeetCategory->getName(), '%%slug%%' => $JobeetCategory->getSlug()), 'messages') ?>
</td>
