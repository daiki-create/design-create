<?php 
    $step1 = false;
    $step2 = false;
    $step3 = false;
    
    if(is_page('mail')){
        $step1 = "p_mail__flow_now";
    }
    if(is_page('check')){
        $step2 = "p_mail__flow_now";
    }
    if(is_page('thanks')){
        $step3 = "p_mail__flow_now";
    }
?>

<aside>
    <ul class="p_mail__flows">
        <li class="p_mail__flow <?php echo $step1; ?>">
            <span class="p_mail__step">STEP1</span>
            <span class="p_mail__white">必須事項の入力</span>
        </li>
        <li class="p_mail__flow <?php echo $step2; ?>">
            <span class="p_mail__step">STEP2</span>
            <span class="p_mail__white">入力内容の確認</span>
        </li>
        <li class="p_mail__flow <?php echo $step3; ?>">
            <span class="p_mail__step">STEP3</span>
            <span class="p_mail__white">送信完了</span>
        </li>
    </ul>
</aside>