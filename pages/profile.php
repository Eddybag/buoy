<?php
$sms_provider = get_user_meta(get_current_user_id(), $this->prefix . 'sms_provider', true);
?>
<table id="" class="form-table">
    <tbody>
        <tr>
            <th>
                <label for="<?php esc_html_e($this->prefix);?>sms_provider">
                    <?php esc_html_e('Phone company', 'better-angels');?>
                </label>
            </th>
            <td>
                <select id="<?php esc_html_e($this->prefix);?>sms_provider" name="<?php esc_html_e($this->prefix);?>sms_provider">
                    <option <?php if ($sms_provider === '') : print 'selected="selected"'; endif;?>></option>
                    <option <?php if ($sms_provider === 'AT&T') : print 'selected="selected"'; endif;?>>AT&amp;T</option>
                    <option <?php if ($sms_provider === 'Alltel') : print 'selected="selected"'; endif;?>>Alltel</option>
                    <option <?php if ($sms_provider === 'Boost Mobile') : print 'selected="selected"'; endif;?>>Boost Mobile</option>
                    <option <?php if ($sms_provider === 'Cricket') : print 'selected="selected"'; endif;?>>Cricket</option>
                    <option <?php if ($sms_provider === 'Metro PCS') : print 'selected="selected"'; endif;?>>Metro PCS</option>
                    <option <?php if ($sms_provider === 'Nextel') : print 'selected="selected"'; endif;?>>Nextel</option>
                    <option <?php if ($sms_provider === 'Ptel') : print 'selected="selected"'; endif;?>>Ptel</option>
                    <option <?php if ($sms_provider === 'Qwest') : print 'selected="selected"'; endif;?>>Qwest</option>
                    <option <?php if ($sms_provider === 'Sprint') : print 'selected="selected"'; endif;?>>Sprint</option>
                    <option <?php if ($sms_provider === 'Suncom') : print 'selected="selected"'; endif;?>>Suncom</option>
                    <option <?php if ($sms_provider === 'T-Mobile') : print 'selected="selected"'; endif;?>>T-Mobile</option>
                    <option <?php if ($sms_provider === 'Tracfone') : print 'selected="selected"'; endif;?>>Tracfone</option>
                    <option <?php if ($sms_provider === 'U.S. Cellular') : print 'selected="selected"'; endif;?>>U.S. Cellular</option>
                    <option <?php if ($sms_provider === 'Verizon') : print 'selected="selected"'; endif;?>>Verizon</option>
                    <option <?php if ($sms_provider === 'Virgin Mobile') : print 'selected="selected"'; endif;?>>Virgin Mobile</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>
                <label for="<?php esc_html_e($this->prefix);?>call_for_help">
                    <?php esc_html_e('Crisis message', 'better-angels');?>
                </label>
            </th>
            <td>
                <textarea
                    id="<?php print esc_attr($this->prefix);?>call_for_help"
                    name="<?php print esc_attr($this->prefix)?>call_for_help"
                    maxlength="160"
                    ><?php print esc_textarea(get_user_meta(get_current_user_id(), $this->prefix . 'call_for_help' ,true));?></textarea>
                <p class="description">
                    <?php print sprintf(
                        esc_html__('Your crisis message is the call for help you send to your emergency team members. Make this short enough to fit inside a txt message!', 'better-angels')
                    );?>
                </p>
            </td>
        </tr>
        <tr>
            <th>
                <label for="<?php esc_html_e($this->prefix);?>public_responder">
                    <?php esc_html_e('Crisis response', 'better-angels');?>
                </label>
            </th>
            <td>
                <label>
                    <input type="checkbox"
                        id="<?php print esc_attr($this->prefix);?>public_responder"
                        name="<?php print esc_attr($this->prefix);?>public_responder"
                        <?php checked(get_user_meta(get_current_user_id(), $this->prefix . 'public_responder', true));?>
                        value="1"
                    />
                    <?php esc_html_e('List me publicly as an available crisis response team member', 'better-angels');?>
                </label>
                <p class="description">
                    <?php print sprintf(
                        esc_html__('Check this box to allow users you do not know personally to invite you to join their personal emerency response team.', 'better-angels')
                    );?>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<script type="text/javascript">
// Kludgy way to fix up the WordPress contact form fields.
jQuery('#your-profile').removeAttr('novalidate');
jQuery('input[name$="_sms"]').attr('type', 'tel');
jQuery('input[name$="_sms"]').attr('pattern', '(?:\\+\\d\\d?[-. ]?)?[-. ()0-9]+');
</script>
