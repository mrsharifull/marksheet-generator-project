<?php
$overall_bangla = ($bangla_1st + $bangla_2nd) / 2;
$overall_english = ($english_1st + $english_2nd) / 2;
$hair_math = ($hair_math_th + $hair_math_p);
$biology = ($biology_th + $biology_p);
$physics = ($physics_th + $physics_p);
$chemistry = ($chemistry_th + $chemistry_p);

$a = ['b1' => $bangla_1st, 'b2' => $bangla_2nd, 'b_avg' => $overall_bangla, 'e1' => $english_1st, 'e2' => $english_2nd, 'e_avg' => $overall_english, 'm' => $math, 'h_m_p' => $hair_math_p, 'h_m_th' => $hair_math_th, 'h_m' => $hair_math, 'phy_p' => $physics_p, 'phy_th' => $physics_th, 'phy' => $physics, 'che_p' => $chemistry_p, 'che_th' => $chemistry_th, 'che' => $chemistry, 'bio_p' => $biology_p, 'bio_th' => $biology_th, 'bio' => $biology, 'islam' => $islam, 's_s' => $social_science];

$b1_grade = '';
$b2_grade = '';
$b_avg_grade = '';
$e1_grade = '';
$e2_grade = '';
$e_avg_grade = '';
$m_grade = '';
$h_m_grade = '';
$phy_grade = '';
$che_grade = '';
$bio_grade = '';
$islam_grade = '';
$s_s_grade = '';

$b1_point = '';
$b2_point = '';
$b_avg_point = '';
$e1_point = '';
$e2_point = '';
$e_avg_point = '';
$m_point = '';
$h_m_point = '';
$phy_point = '';
$che_point = '';
$bio_point = '';
$islam_point = '';
$s_s_point = '';



$diff_plus = '';
$diff_pass = '';

$b1_diff_plus = '';
$b2_diff_plus = '';
$b_avg_diff_plus = '';
$e1_diff_plus = '';
$e2_diff_plus = '';
$e_avg_diff_plus = '';
$m_diff_plus = '';
$h_m_diff_plus = '';
$phy_diff_plus = '';
$che_diff_plus = '';
$bio_diff_plus = '';
$islam_diff_plus = '';
$s_s_diff_plus = '';

$b1_diff_pass = '';
$b2_diff_pass = '';
$b_avg_diff_pass = '';
$e1_diff_pass = '';
$e2_diff_pass = '';
$e_avg_diff_pass = '';
$m_diff_pass = '';
$h_m_diff_pass = '';
$phy_diff_pass = '';
$che_diff_pass = '';
$bio_diff_pass = '';
$islam_diff_pass = '';
$s_s_diff_pass = '';


$p = 7;
$th = 24;
$grade = '';
$point = '';
for ($i = 1; $i <= 13; $i++) {
    for ($j = 1; $j <= 1; $j++) {
        if ($i == 1) {
            $mark = $a['b1'];
        } elseif ($i == 2) {
            $mark = $a['b2'];
        } elseif ($i == 3) {
            $mark = $a['b_avg'];
        } elseif ($i == 4) {
            $mark = $a['e1'];
        } elseif ($i == 5) {
            $mark = $a['e2'];
        } elseif ($i == 6) {
            $mark = $a['e_avg'];
        } elseif ($i == 7) {
            $mark = $a['m'];
        } elseif ($i == 8) {
            $mark = $a['h_m'];
            $mark_p = $a['h_m_p'];
            $mark_th = $a['h_m_th'];
        } elseif ($i == 9) {
            $mark = $a['phy'];
            $mark_p = $a['phy_p'];
            $mark_th = $a['phy_th'];
        } elseif ($i == 10) {
            $mark = $a['che'];
            $mark_p = $a['che_p'];
            $mark_th = $a['che_th'];
        } elseif ($i == 11) {
            $mark = $a['bio'];
            $mark_p = $a['che_p'];
            $mark_th = $a['che_th'];
        } elseif ($i == 12) {
            $mark = $a['islam'];
        } elseif ($i == 13) {
            $mark = $a['s_s'];
        }
    }
    for ($k = 1; $k <= 1; $k++) {
        if ($i == 8 || $i == 9 || $i == 10 || $i == 11) {
            if ($mark_p > $p && $mark_th > $th && $mark >= 80 && $mark <= 100) {
                $grade = 'A+';
                $point = 5.00;
            } elseif ($mark_p > $p && $mark_th > $th && $mark >= 70 && $mark <= 79) {
                $grade = 'A';
                $point = 4.00;
                $diff_plus = 80 - $mark;
            } elseif ($mark_p > $p && $mark_th > $th && $mark >= 60 && $mark <= 69) {
                $grade = 'A-';
                $point = 3.50;
                $diff_plus = 80 - $mark;
            } elseif ($mark_p > $p && $mark_th > $th && $mark >= 50 && $mark <= 59) {
                $grade = 'B';
                $point = 3.00;
                $diff_plus = 80 - $mark;
            } elseif ($mark_p > $p && $mark_th > $th && $mark >= 40 && $mark <= 49) {
                $grade = 'C';
                $point = 2.50;
                $diff_plus = 80 - $mark;
            } elseif ($mark_p > $p && $mark_th > $th && $mark >= 33 && $mark <= 39) {
                $grade = 'D';
                $point = 2.00;
                $diff_plus = 80 - $mark;
            } else {
                $grade = 'F';
                $point = 0;
                $diff_pass = 33 - $mark;
            }
        } else {
            if ($mark >= 80 && $mark <= 100) {
                $grade = 'A+';
                $point = 5.00;
            } elseif ($mark >= 70 && $mark <= 79) {
                $grade = 'A';
                $point = 4.00;
                $diff_plus = 80 - $mark;
            } elseif ($mark >= 60 && $mark <= 69) {
                $grade = 'A-';
                $point = 3.50;
                $diff_plus = 80 - $mark;
            } elseif ($mark >= 50 && $mark <= 59) {
                $grade = 'B';
                $point = 3.00;
                $diff_plus = 80 - $mark;
            } elseif ($mark >= 40 && $mark <= 49) {
                $grade = 'C';
                $point = 2.50;
                $diff_plus = 80 - $mark;
            } elseif ($mark >= 33 && $mark <= 39) {
                $grade = 'D';
                $point = 2.00;
                $diff_plus = 80 - $mark;
            } else {
                $grade = 'F';
                $point = 0;
                $diff_pass = 33 - $mark;
            }
        }
    }
    $point = number_format($point, 2);

    for ($l = 1; $l <= 1; $l++) {
        if ($i == 1) {
            $b1_grade = $grade;
            $b1_point = $point;
            $b1_diff_plus = $diff_plus;
            $b1_diff_pass = $diff_pass;
        } elseif ($i == 2) {
            $b2_grade = $grade;
            $b2_point = $point;
            $b2_diff_plus = $diff_plus;
            $b2_diff_pass = $diff_pass;
        } elseif ($i == 3) {
            $b_avg_grade = $grade;
            $b_avg_point = $point;
            $b_avg_diff_plus = $diff_plus;
            $b_avg_diff_pass = $diff_pass;
        } elseif ($i == 4) {
            $e1_grade = $grade;
            $e1_point = $point;
            $e1_diff_plus = $diff_plus;
            $e1_diff_pass = $diff_pass;
        } elseif ($i == 5) {
            $e2_grade = $grade;
            $e2_point = $point;
            $e2_diff_plus = $diff_plus;
            $e2_diff_pass = $diff_pass;
        } elseif ($i == 6) {
            $e_avg_grade = $grade;
            $e_avg_point = $point;
            $e_avg_diff_plus = $diff_plus;
            $e_avg_diff_pass = $diff_pass;
        } elseif ($i == 7) {
            $m_grade = $grade;
            $m_point = $point;
            $m_diff_plus = $diff_plus;
            $m_diff_pass = $diff_pass;
        } elseif ($i == 8) {
            $h_m_grade = $grade;
            $h_m_point = $point;
            $h_m_diff_plus = $diff_plus;
            $h_m_diff_pass = $diff_pass;
        } elseif ($i == 9) {
            $phy_grade = $grade;
            $phy_point = $point;
            $phy_diff_plus = $diff_plus;
            $phy_diff_pass = $diff_pass;
        } elseif ($i == 10) {
            $che_grade = $grade;
            $che_point = $point;
            $che_diff_plus = $diff_plus;
            $che_diff_pass = $diff_pass;
        } elseif ($i == 11) {
            $bio_grade = $grade;
            $bio_point = $point;
            $bio_diff_plus = $diff_plus;
            $bio_diff_pass = $diff_pass;
        } elseif ($i == 12) {
            $islam_grade = $grade;
            $islam_point = $point;
            $islam_diff_plus = $diff_plus;
            $islam_diff_pass = $diff_pass;
        } elseif ($i == 13) {
            $s_s_grade = $grade;
            $s_s_point = $point;
            $s_s_diff_plus = $diff_plus;
            $s_s_diff_pass = $diff_pass;
        }
    }
}
if ($b1_point == 0 || $b2_point == 0 || $b_avg_point == 0 || $e1_point == 0 || $e2_point == 0 || $e_avg_point == 0 || $m_point == 0 || $h_m_point == 0 || $phy_point == 0 || $che_point == 0 || $bio_point == 0 || $islam_point == 0 || $s_s_point == 0) {
    $overall_point = 0;
    $overall_grade = "F";
} elseif ($b1_point == 5.00 && $b2_point == 5.00 && $b_avg_point == 5.00 && $e1_point == 5.00 && $e2_point == 5.00 && $e_avg_point == 5.00 && $m_point == 5.00 && $h_m_point == 5.00 && $phy_point == 5.00 && $che_point == 5.00 && $bio_point == 5.00 && $islam_point == 5.00 && $s_s_point == 5.00) {
    $overall_point = 5.00;
    $overall_grade = "Golden(A+)";
} else {
    $overall_point = number_format((($b1_point + $b2_point + $b_avg_point + $e1_point + $e2_point + $e_avg_point + $m_point + $h_m_point + $phy_point + $che_point + $bio_point + $islam_point + $s_s_point) / 13), 2);

    if ($overall_point == 5.00) {
        $overall_grade = "A+";
    } elseif ($overall_point >= 4.00) {
        $overall_grade = "A";
    } elseif ($overall_point >= 3.50) {
        $overall_grade = "A-";
    } elseif ($overall_point >= 3.00) {
        $overall_grade = "B";
    } elseif ($overall_point >= 2.50) {
        $overall_grade = "C";
    } else {
        $overall_grade = "D";
    }
}
?>

<section class="marksheet_wrap my-5">
    <div class="container">
        <div class="marksheet my-0 mx-auto">
            <div class="header_title text-center">
                <h1><?php echo $scl_name; ?></h1>
                <h3><?php echo $scl_address; ?></h3>
                <h3>S S C Examination <?php echo $exam_year; ?></h3>
                <hr>
            </div>
            <div class="title text-center">
                <h2>Marksheet</h2>
            </div>
            <div class="name_section my-4">
                <div class="row">
                    <div class="col-5">
                        <div class="name-section1">
                            <h4>Student Name <span>:</span></h4>
                            <h4>Father Name <span>:</span></h4>
                            <h4>Mother Name <span>:</span></h4>
                            <h4>Roll No <span>:</span></h4>
                            <h4>Registration No <span>:</span></h4>
                            <h4>Department <span>:</span></h4>
                            <h4>Seasion <span>:</span></h4>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="name-section2">
                            <h4><?php echo $name; ?></h4>
                            <h4><?php echo $father_name; ?></h4>
                            <h4><?php echo $mother_name; ?></h4>
                            <h4><?php echo $roll; ?></h4>
                            <h4><?php echo $registration; ?></h4>
                            <h4><?php echo $department; ?></h4>
                            <h4><?php echo $seasion; ?></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="marksheet_table mb-4">
                <table>
                    <tr>
                        <th>Subject</th>
                        <th>Marks</th>
                        <th>Grade</th>
                        <th>GPA</th>
                    </tr>
                    <tr>
                        <td>Bangla 1st Paper</td>
                        <td><?php echo $bangla_1st; ?> </td>
                        <td><?php echo $b1_grade; ?> </td>
                        <td><?php echo $b1_point; ?> </td>
                    </tr>
                    <tr>
                        <td>Bangla 2nd Paper</td>
                        <td><?php echo $bangla_2nd; ?> </td>
                        <td><?php echo $b2_grade; ?></td>
                        <td><?php echo $b2_point; ?> </td>
                    </tr>
                    <tr>
                        <td>Overall Bangla</td>
                        <td><?php echo $overall_bangla; ?> </td>
                        <td><?php echo $b_avg_grade; ?> </td>
                        <td><?php echo $b_avg_point; ?> </td>
                    </tr>
                    <tr>
                        <td>English 1st Paper</td>
                        <td><?php echo $english_1st; ?> </td>
                        <td><?php echo $e1_grade; ?></td>
                        <td><?php echo $e1_point; ?> </td>
                    </tr>
                    <tr>
                        <td>English 2nd Paper</td>
                        <td><?php echo $english_2nd; ?> </td>
                        <td><?php echo $e2_grade; ?></td>
                        <td><?php echo $e2_point; ?> </td>
                    </tr>
                    <tr>
                        <td>Overall English</td>
                        <td><?php echo $overall_english; ?> </td>
                        <td><?php echo $e_avg_grade; ?> </td>
                        <td><?php echo $e_avg_point; ?> </td>
                    </tr>
                    <tr>
                        <td>Math</td>
                        <td><?php echo $math; ?> </td>
                        <td><?php echo $m_grade; ?> </td>
                        <td><?php echo $m_point; ?> </td>
                    </tr>
                    <tr>
                        <td rowspan="3">Hair Math</td>
                        <td><?php echo $hair_math_p; ?></td>
                        <td rowspan="3"><?php echo $h_m_grade; ?></td>
                        <td rowspan="3"><?php echo $h_m_point; ?></td>
                    </tr>
                    <tr>

                        <td><?php echo $hair_math_th; ?></td>
                    </tr>
                    <tr>
                        <td><?php echo $hair_math; ?></td>
                    </tr>

                    <tr>
                        <td rowspan="3">Physics</td>
                        <td><?php echo $physics_p; ?></td>
                        <td rowspan="3"><?php echo $phy_grade; ?></td>
                        <td rowspan="3"><?php echo $phy_point; ?></td>
                    </tr>
                    <tr>

                        <td><?php echo $physics_th; ?> </td>
                    </tr>
                    <tr>
                        <td><?php echo $physics; ?></td>
                    </tr>
                    <tr>
                        <td rowspan="3">Chemistry;</td>
                        <td><?php echo $chemistry_p; ?></td>
                        <td rowspan="3"><?php echo $che_grade; ?></td>
                        <td rowspan="3"><?php echo $che_point; ?></td>
                    </tr>
                    <tr>

                        <td><?php echo $chemistry_th; ?> </td>
                    </tr>
                    <tr>
                        <td><?php echo $chemistry; ?></td>
                    </tr>
                    <tr>
                        <td rowspan="3">Biology</td>
                        <td><?php echo $biology_p; ?></td>
                        <td rowspan="3"><?php echo $bio_grade; ?></td>
                        <td rowspan="3"><?php echo $bio_point; ?></td>
                    </tr>
                    <tr>

                        <td><?php echo $biology_th; ?> </td>
                    </tr>
                    <tr>
                        <td><?php echo $biology; ?></td>
                    </tr>

                    <tr>
                        <td>Islam</td>
                        <td><?php echo $islam; ?> </td>
                        <td><?php echo $islam_grade; ?> </td>
                        <td><?php echo $islam_point; ?> </td>
                    </tr>
                    <tr>
                        <td>Social Science</td>
                        <td><?php echo $social_science; ?> </td>
                        <td><?php echo $s_s_grade; ?></td>
                        <td><?php echo $s_s_point; ?> </td>
                    </tr>
                    <tr>
                        <td>Result</td>
                        <td colspan="2"><?php echo $overall_grade; ?> </td>
                        <td><?php echo $overall_point; ?></td>
                    </tr>

                </table>
            </div>
            <div class="ms_footer pt-3 text-center">
                <div class="row">
                    <div class="col-4">
                        <h6>Principal Signature</h6>
                    </div>
                    <div class="col-4">
                        <h6>Checked by</h6>
                    </div>
                    <div class="col-4">
                        <h6>Controller of Examination</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="different_check_wrap my-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="check_wrap">
                    <?php


                    $diff_check = '';
                    $sub_plus_diff = '';
                    $sub_pass_diff = '';

                    $plus_count = 0;
                    $a_grade_count = 0;
                    $a_minus_count = 0;
                    $b_grade_count = 0;
                    $c_grade_count = 0;
                    $d_grade_count = 0;
                    $f_grade_count = 0;
                    for ($i = 1; $i <= 13; $i++) {
                        for ($j = 1; $j <= 1; $j++) {
                            if ($i == 1) {
                                $diff_check = $b1_point;
                                $sub_plus_diff = 'Bangla 1st Paper Plus Mark Different = ' . $b1_diff_plus;
                                $sub_fail_diff = 'Bangla 1st Paper Pass Mark Different = ' . $b1_diff_pass;
                            } elseif ($i == 2) {
                                $diff_check = $b2_point;
                                $sub_plus_diff = 'Bangla 2nd Paper Plus Mark Different = ' . $b2_diff_plus;
                                $sub_fail_diff = 'Bangla 2nd Paper Pass Mark Different = ' . $b2_diff_pass;
                            } elseif ($i == 3) {
                                $diff_check = $b_avg_point;
                                $sub_plus_diff = 'Overall Bangla Plus Mark Different = ' . $b_avg_diff_plus;
                                $sub_fail_diff = 'Overall Bangla Pass Mark Different = ' . $b_avg_diff_pass;
                            } elseif ($i == 4) {
                                $diff_check = $e1_point;
                                $sub_plus_diff = 'English 1st Paper Plus Mark Different = ' . $e1_diff_plus;
                                $sub_fail_diff = 'English 1st Paper Pass Mark Different = ' . $e1_diff_pass;
                            } elseif ($i == 5) {
                                $diff_check = $e2_point;
                                $sub_plus_diff = 'English 2nd Paper Plus Mark Different = ' . $e2_diff_plus;
                                $sub_fail_diff = 'English 2nd Paper Pass Mark Different = ' . $e2_diff_pass;
                            } elseif ($i == 6) {
                                $diff_check = $e_avg_point;
                                $sub_plus_diff = 'Overall English Plus Mark Different = ' . $e_avg_diff_plus;
                                $sub_fail_diff = 'Overall English Pass Mark Different = ' . $e_avg_diff_pass;
                            } elseif ($i == 7) {
                                $diff_check = $m_point;
                                $sub_plus_diff = 'Math Plus Mark Different = ' . $m_diff_plus;
                                $sub_fail_diff = 'Math Pass Mark Different = ' . $m_diff_pass;
                            } elseif ($i == 8) {
                                $diff_check = $h_m_point;
                                $sub_plus_diff = 'Hair Math Plus Mark Different = ' . $h_m_diff_plus;
                                $sub_fail_diff = 'Hair Math Pass Mark Different = ' . $h_m_diff_pass;
                            } elseif ($i == 9) {
                                $diff_check = $phy_point;
                                $sub_plus_diff = 'Physics Plus Mark Different = ' . $phy_diff_plus;
                                $sub_fail_diff = 'Physics Pass Mark Different = ' . $phy_diff_pass;
                            } elseif ($i == 10) {
                                $diff_check = $che_point;
                                $sub_plus_diff = 'Chemistry Plus Mark Different = ' . $che_diff_plus;
                                $sub_fail_diff = 'Chemistry Pass Mark Different = ' . $che_diff_pass;
                            } elseif ($i == 11) {
                                $diff_check = $bio_point;
                                $sub_plus_diff = 'Biology Plus Mark Different = ' . $bio_diff_plus;
                                $sub_fail_diff = 'Biology Pass Mark Different = ' . $bio_diff_pass;
                            } elseif ($i == 12) {
                                $diff_check = $islam_point;
                                $sub_plus_diff = 'Islam Plus Mark Different = ' . $islam_diff_plus;
                                $sub_fail_diff = 'Islam Pass Mark Different = ' . $islam_diff_pass;
                            } elseif ($i == 13) {
                                $diff_check = $s_s_point;
                                $sub_plus_diff = 'Social Science Plus Mark Different = ' . $s_s_diff_plus;
                                $sub_fail_diff = 'Social Science Pass Mark Different = ' . $s_s_diff_pass;
                            }
                        }
                        for ($k = 1; $k <= 1; $k++) {
                            if ($diff_check < 5.00 && $diff_check >= 2.00) {
                                echo "<h3>$sub_plus_diff</h3>";
                            } elseif ($diff_check < 2.00) {
                                echo "<h3>$sub_fail_diff</h3>";
                            } else {
                                continue;
                            }
                        }
                        for ($l = 1; $l <= 1; $l++) {
                            if ($diff_check == 5.00) {
                                $plus_count++;
                            } elseif ($diff_check == 4.00) {
                                $a_grade_count++;
                            } elseif ($diff_check == 3.50) {
                                $a_minus_count++;
                            } elseif ($diff_check == 3.00) {
                                $b_grade_count++;
                            } elseif ($diff_check == 2.50) {
                                $c_grade_count++;
                            } elseif ($diff_check == 2.00) {
                                $d_grade_count++;
                            } elseif ($diff_check == 0) {
                                $f_grade_count++;
                            } else {
                                continue;
                            }
                        }
                    }

                    echo "<br><br>";
                    echo "<h3>You have got A+ in $plus_count subject</h3>";
                    echo "<h3>You have got A in $a_grade_count subject</h3>";
                    echo "<h3>You have got A- in $a_minus_count subject</h3>";
                    echo "<h3>You have got B in $b_grade_count subject</h3>";
                    echo "<h3>You have got C in $c_grade_count subject</h3>";
                    echo "<h3>You have got D in $d_grade_count subject</h3>";
                    echo "<h3>You have got F in $f_grade_count subject</h3>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>