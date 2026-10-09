<?php
/**
 * includes/compact-form.php — the short form body shared by hero-form.php and cta-band.php
 * (name, phone, email, service + required terms consent). Same endpoint, attribution and spam
 * shield as lead-form.php. Set $cfId (unique per page), optional $cfService (service name to
 * preselect) and $cfButton (btn modifier class).
 */
$cf = preg_replace('/[^a-z0-9-]/', '', strtolower($cfId ?? 'hero')) ?: 'hero';
?>
<form action="https://db.pageone.cloud/functions/v1/leads/river-city-tree-care" method="POST" class="hero-form">
  <input type="hidden" name="_next" value="<?php echo e($siteUrl); ?>/thank-you">
  <input type="text" name="_honey" style="display:none !important" tabindex="-1" autocomplete="off" aria-hidden="true">
  <?php echo p1_attribution_fields($cf); ?>
  <input type="hidden" name="form_location" value="<?php echo e($cf); ?>">
  <input type="hidden" name="consent_version" value="v2.1">
  <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/'); ?>">
  <div class="form-row"><label class="sr-only" for="<?php echo $cf; ?>-name">Name</label><input id="<?php echo $cf; ?>-name" type="text" name="name" placeholder="Name" autocomplete="name" required></div>
  <div class="form-row"><label class="sr-only" for="<?php echo $cf; ?>-phone">Phone</label><input id="<?php echo $cf; ?>-phone" type="tel" name="phone" placeholder="Phone" autocomplete="tel" required></div>
  <div class="form-row"><label class="sr-only" for="<?php echo $cf; ?>-email">Email</label><input id="<?php echo $cf; ?>-email" type="email" name="email" placeholder="Email" autocomplete="email" required></div>
  <div class="form-row"><label class="sr-only" for="<?php echo $cf; ?>-service">Service needed</label>
    <select id="<?php echo $cf; ?>-service" name="service">
      <option value="">What do you need?</option>
      <?php foreach ($formServices as $cfSvc): ?>
      <option value="<?php echo e($cfSvc); ?>"<?php echo (($cfService ?? '') === $cfSvc) ? ' selected' : ''; ?>><?php echo e($cfSvc); ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <label class="consent"><input type="checkbox" name="terms_accepted" value="yes" required><span>I agree to the <a href="/terms/" target="_blank" rel="noopener">Terms</a> and <a href="/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a> and consent to be contacted about my request. *</span></label>
  <!-- spam shield: signed render timestamp + JS interaction signal -->
  <?php $__ft_ts = (string) time(); ?>
  <input type="hidden" name="_ft" value="<?php echo $__ft_ts . '.' . hash_hmac('sha256', $__ft_ts, $leadsFormSecret); ?>">
  <input type="hidden" name="_js" value="" class="js-shield-field">
  <?php if (empty($GLOBALS['__js_shield'])) { $GLOBALS['__js_shield'] = 1; ?>
  <script>(function(){var d=document,f=function(){var i,e=d.querySelectorAll('.js-shield-field');for(i=0;i<e.length;i++)e[i].value='1';d.removeEventListener('pointerdown',f);d.removeEventListener('keydown',f);};d.addEventListener('pointerdown',f);d.addEventListener('keydown',f);})();</script>
  <?php } ?>
  <button type="submit" class="btn <?php echo e($cfButton ?? 'btn-primary'); ?> btn-block">Send my request</button>
</form>
<?php unset($cfId, $cfService, $cfButton); ?>
