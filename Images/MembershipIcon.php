<!-- 16009608 E-Commerce Assignment Part 2 -->
<!-- controls which image is hwon for membership status  -->
<div class="MembershipStatus">
    <h2>Membership Status</h2>
    <?php
        switch($_SESSION)
        {
            case $_SESSION['account'] == 'gold':
                ?><img src="../Images/gold.png"  title="Membership Status" alt="image showing your membership status" /><?php
            break;
            case $_SESSION['account'] == 'silver':
                ?><img src="../Images/silver.png"  title="Membership Status" alt="image showing your membership status" /><?php
            break;
            default:
            ?><img src="../Images/bronze.png"  title="Membership Status" alt="image showing your membership status" /><?php
        }
    ?>
</div>