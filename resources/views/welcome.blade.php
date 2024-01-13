<ul>
    <li>
<h4>Câu 1:</h4>


<p>Tính năng mới nào của Oracle cho phép nhiều user xem nội dung của table tại 1 số điểm trong quá khứ?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="4" id="answerNoRight0">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','0')" name="question-detail0" value="1" id="group10" disabled="disabled">
<label for="group10" class="custom-control-label">A. LogMiner</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','0')" name="question-detail0" value="2" id="group20" disabled="disabled">
<label for="group20" class="custom-control-label">B. Import&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','0')" name="question-detail0" value="3" id="group30" disabled="disabled">
<label for="group30" class="custom-control-label">C. Metadata Viewer&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','0')" name="question-detail0" value="4" id="group40" disabled="disabled">
<label for="group40" class="custom-control-label">D. Oracle Flashback</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result0" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>D</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result0">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box0" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 2:</h4>


<p>Phát biểu nào dưới đây là đúng về tính năng nâng cao để chia sẻ các câu lệnh SQL trong shared pool?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="3" id="answerNoRight1">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','1')" name="question-detail1" value="1" id="group11" disabled="disabled">
<label for="group11" class="custom-control-label">A. The cursor sharing feature can re-use a SQL statement even if the columns in the statement are in a different order or the GROUP BY clause is different</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','1')" name="question-detail1" value="2" id="group21" disabled="disabled">
<label for="group21" class="custom-control-label">B. The new columns CPU_COST, IO_COST, and TEMP_SPACE in PLAN_ TABLE help the rule-based optimizer (RBO) to be more accurate</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','1')" name="question-detail1" value="3" id="group31" disabled="disabled">
<label for="group31" class="custom-control-label">C. Thậm chí nếu chỉ có 1 sự khác nhau trong câu lệnh SQL là trong giá trị kí tự, câu lệnh SQL có thể ko được tái sử dụng nếu số liệu thống kê trong quá khứ bị xuyên tạc cho cột trong mđề WHERE</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','1')" name="question-detail1" value="4" id="group41" disabled="disabled">
<label for="group41" class="custom-control-label">D. The CURSOR_SHARING parameter now supports the SIMILAR and DERIVED values</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result1" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>C</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result1">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box1" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 3:</h4>


<p>Cho table được khai báo như sau,Given the table declaration below, xác nhận việc sử dụng không hợp lệ kiểu DL timestamp trong 1 biểu thức hay chức năng(chọn 2)? CREATE TABLE TRANSACTIONS (TRANS_ID NUMBER, AMOUNT NUMBER(10,2), TRANS_START TIMESTAMP, TRANS_END TIMESTAMP, SHIP_DATE DATE, EXPIRE_DATE INTERVAL DAY(0) TO SECOND(0));</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="4" id="answerNoRight2">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','2')" name="question-detail2" value="1" id="group12">
<label for="group12" class="custom-control-label">A. TRANS_START - TRANS_END&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','2')" name="question-detail2" value="2" id="group22">
<label for="group22" class="custom-control-label">B. TO_TIMESTAMP(AMOUNT, ‘YY-MM-DD HH:MI:SS’)</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','2')" name="question-detail2" value="3" id="group32">
<label for="group32" class="custom-control-label">C. TRANS_START + INTERVAL „4‟ DAY</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','2')" name="question-detail2" value="4" id="group42">
<label for="group42" class="custom-control-label">D. &nbsp;TRANS_START + SHIP_DATE</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result2" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>D</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result2" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box2" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 4:</h4>


<p>Chọn 2 tham số NLS ko thể thay đổi khi sử dụng câu lệnh ALTER SESSION?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="3" id="answerNoRight3">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','3')" name="question-detail3" value="1" id="group13">
<label for="group13" class="custom-control-label">A. NLS_CHARACTERSET</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','3')" name="question-detail3" value="2" id="group23">
<label for="group23" class="custom-control-label">B. NLS_SORT&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','3')" name="question-detail3" value="3" id="group33">
<label for="group33" class="custom-control-label">C. NLS_NCHAR_CHARACTERSET&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','3')" name="question-detail3" value="4" id="group43">
<label for="group43" class="custom-control-label">D. NLS_TERRITORY</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result3" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>C</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result3" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box3" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 5:</h4>


<p>View TĐDL nào thể hiện sự bộ kí tự CSDL?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="2" id="answerNoRight4">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','4')" name="question-detail4" value="1" id="group14">
<label for="group14" class="custom-control-label">A. V$DATABASE&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','4')" name="question-detail4" value="2" id="group24">
<label for="group24" class="custom-control-label">B. NLS_DATABASE_PARAMETERS&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','4')" name="question-detail4" value="3" id="group34">
<label for="group34" class="custom-control-label">C. NLS_INSTANCE_PARAMETERS&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','4')" name="question-detail4" value="4" id="group44">
<label for="group44" class="custom-control-label">D. NLS_SESSION_PARAMETERS</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result4" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>B</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result4" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box4" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 6:</h4>


<p>Câu lệnh nào dịnh nghĩa CONNECT và RESOURCE như các role mặc định cho user JAMES?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="1" id="answerNoRight5">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','5')" name="question-detail5" value="1" id="group15">
<label for="group15" class="custom-control-label">A. ALTER USER&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','5')" name="question-detail5" value="2" id="group25">
<label for="group25" class="custom-control-label">B. ALTER ROLE&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','5')" name="question-detail5" value="3" id="group35">
<label for="group35" class="custom-control-label">C. SET ROLE&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','5')" name="question-detail5" value="4" id="group45">
<label for="group45" class="custom-control-label">D. SET PRIVILEGE</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result5" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>A</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result5" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box5" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 7:</h4>


<p>Cái gì được thực thi khi sử dụng câu lệnh sau:ALTER USER JOHN DEFAULT ROLE ALL:</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="4" id="answerNoRight6">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','6')" name="question-detail6" value="1" id="group16">
<label for="group16" class="custom-control-label">A. John is assigned all the roles created in the database</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','6')" name="question-detail6" value="2" id="group26">
<label for="group26" class="custom-control-label">B. Future roles granted to John will not be default roles</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','6')" name="question-detail6" value="3" id="group36">
<label for="group36" class="custom-control-label">C. All of John‟s roles are enabled, except the roles with passwords</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','6')" name="question-detail6" value="4" id="group46">
<label for="group46" class="custom-control-label">D. Tất cả các ROLE của John đƣợc bật khi anh ấy kết nối CSDL</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result6" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>D</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result6" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box6" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 8:</h4>


<p>Bằng cách nào có thể bật 1 ROLE?&nbsp;</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="3" id="answerNoRight7">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','7')" name="question-detail7" value="1" id="group17">
<label for="group17" class="custom-control-label">A. ALTER ROLE&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','7')" name="question-detail7" value="2" id="group27">
<label for="group27" class="custom-control-label">B. ALTER USER&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','7')" name="question-detail7" value="3" id="group37">
<label for="group37" class="custom-control-label">C. SET ROLE&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','7')" name="question-detail7" value="4" id="group47">
<label for="group47" class="custom-control-label">D. ALTER SESSION</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result7" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>C</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result7" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box7" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 9:</h4>


<p>ROLE nào sau đây ko phải là 1ROLE được định nghĩa bởi Oracle?&nbsp;</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="1" id="answerNoRight8">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','8')" name="question-detail8" value="1" id="group18">
<label for="group18" class="custom-control-label">A. SYSDBA&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','8')" name="question-detail8" value="2" id="group28">
<label for="group28" class="custom-control-label">B. CONNECT&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','8')" name="question-detail8" value="3" id="group38">
<label for="group38" class="custom-control-label">C. IMP_FULL_DATABASE&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','8')" name="question-detail8" value="4" id="group48">
<label for="group48" class="custom-control-label">D. RESOURCE</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result8" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>A</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result8" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box8" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 10:</h4>


<p>Để gán quyền SELECT trên table CUSTOMER cho tất cả user trong CSDL thì dùng câu lệnh nào?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="4" id="answerNoRight9">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','9')" name="question-detail9" value="1" id="group19">
<label for="group19" class="custom-control-label">A. GRANT SELECT ON CUSTOMER TO ALL USERS</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','9')" name="question-detail9" value="2" id="group29">
<label for="group29" class="custom-control-label">B. GRANT ALL ON CUSTOMER TO ALL</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','9')" name="question-detail9" value="3" id="group39">
<label for="group39" class="custom-control-label">C. GRANT SELECT ON CUSTOMER TO ALL</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','9')" name="question-detail9" value="4" id="group49">
<label for="group49" class="custom-control-label">D. GRANT SELECT ON CUSTOMER TO PUBLIC</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result9" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>D</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result9" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box9" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 11:</h4>


<p>View TĐDL nào cho truy vấn để thấy xem user có quyền EXECUTE trong thủ tục hay không?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="2" id="answerNoRight10">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','10')" name="question-detail10" value="1" id="group110">
<label for="group110" class="custom-control-label">A. DBA_SYS_PRIVS&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','10')" name="question-detail10" value="2" id="group210">
<label for="group210" class="custom-control-label">B. DBA_TAB_PRIVS</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','10')" name="question-detail10" value="3" id="group310">
<label for="group310" class="custom-control-label">C. DBA_PROC_PRIVS&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','10')" name="question-detail10" value="4" id="group410">
<label for="group410" class="custom-control-label">D. SESSION_PRIVS&nbsp;</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result10" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>B</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result10" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box10" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 12:</h4>


<p>Những điều nào sau đây ko phải quyền hệ thống?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="1" id="answerNoRight11">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','11')" name="question-detail11" value="1" id="group111">
<label for="group111" class="custom-control-label">A. SELECT&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','11')" name="question-detail11" value="2" id="group211">
<label for="group211" class="custom-control-label">B. UPDATE ANY&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','11')" name="question-detail11" value="3" id="group311">
<label for="group311" class="custom-control-label">C. EXECUTE ANY&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','11')" name="question-detail11" value="4" id="group411">
<label for="group411" class="custom-control-label">D. CREATE TABLE</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result11" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>A</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result11" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box11" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 13:</h4>


<p>Mệnh đề nào dùng để chỉ ra người được gán quyền hệ thống được gán cho người khác?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="2" id="answerNoRight12">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','12')" name="question-detail12" value="1" id="group112">
<label for="group112" class="custom-control-label">A. WITH GRANT OPTION&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','12')" name="question-detail12" value="2" id="group212">
<label for="group212" class="custom-control-label">B. WITH ADMIN OPTION&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','12')" name="question-detail12" value="3" id="group312">
<label for="group312" class="custom-control-label">C. CASCADE&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','12')" name="question-detail12" value="4" id="group412">
<label for="group412" class="custom-control-label">D. WITH MANAGE OPTION</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result12" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>B</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result12" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box12" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 14:</h4>


<p>View nào cho phép truy vấn để thấy John có quyền CREATE TABLE hay không?&nbsp;</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="1" id="answerNoRight13">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','13')" name="question-detail13" value="1" id="group113">
<label for="group113" class="custom-control-label">A. DBA_SYS_PRIVS&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','13')" name="question-detail13" value="2" id="group213">
<label for="group213" class="custom-control-label">B. DBA_USER_PRIVS&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','13')" name="question-detail13" value="3" id="group313">
<label for="group313" class="custom-control-label">C. DBA_ROLE_PRIVS&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','13')" name="question-detail13" value="4" id="group413">
<label for="group413" class="custom-control-label">D. DBA_TAB_PRIVS</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result13" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>A</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result13" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box13" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 15:</h4>


<p>User JAMES có table tên JOBS được tạo trong tablespace USERS. Khi bạn thực hiện câu lệnh nào sau đây thì&nbsp;<br>
sẽ có tác động trên table JOBS?&nbsp;&nbsp;ALTER USER JAMES QUOTA 0 ON USERS;&nbsp;</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="3" id="answerNoRight14">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','14')" name="question-detail14" value="1" id="group114">
<label for="group114" class="custom-control-label">A. &nbsp;No more rows can be added to the JOBS table.&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','14')" name="question-detail14" value="2" id="group214">
<label for="group214" class="custom-control-label">B. No blocks can be allocated to the JOBS table.&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','14')" name="question-detail14" value="3" id="group314">
<label for="group314" class="custom-control-label">C. Không có extent mới có thể cấp phát cho table JOBS.&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','14')" name="question-detail14" value="4" id="group414">
<label for="group414" class="custom-control-label">D. The table JOBS cannot be accessed</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result14" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>C</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result14" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box14" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 16:</h4>


<p>Mệnh đề nào sau đây trong câu lệnh CREATE USER&nbsp; có thể được dùng để chỉ ra ko giới hạn&nbsp; space trong&nbsp;tablespace là APP_DATA?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="3" id="answerNoRight15">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','15')" name="question-detail15" value="1" id="group115">
<label for="group115" class="custom-control-label">A. DEFAULT TABLESPACE</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','15')" name="question-detail15" value="2" id="group215">
<label for="group215" class="custom-control-label">B. UNLIMITED TABLESPACE&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','15')" name="question-detail15" value="3" id="group315">
<label for="group315" class="custom-control-label">C. QUOTA&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','15')" name="question-detail15" value="4" id="group415">
<label for="group415" class="custom-control-label">D. PROFILE</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result15" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>C</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result15" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box15" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 17:</h4>


<p>View TĐDL nào thể hiện ngày hết hạn password của 1 user?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="2" id="answerNoRight16">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','16')" name="question-detail16" value="1" id="group116">
<label for="group116" class="custom-control-label">A. DBA_PROFILES&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','16')" name="question-detail16" value="2" id="group216">
<label for="group216" class="custom-control-label">B. DBA_USERS&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','16')" name="question-detail16" value="3" id="group316">
<label for="group316" class="custom-control-label">C. DBA_PASSWORDS</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','16')" name="question-detail16" value="4" id="group416">
<label for="group416" class="custom-control-label">D. V$SESSION</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result16" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>B</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result16" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box16" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 18:</h4>


<p>Tham số pw nào trong profile ngăn user sử dụng lại pw cũ trong vòng 90 ngày?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="1" id="answerNoRight17">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','17')" name="question-detail17" value="1" id="group117">
<label for="group117" class="custom-control-label">A. PASSWORD_REUSE_TIME&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','17')" name="question-detail17" value="2" id="group217">
<label for="group217" class="custom-control-label">B. PASSWORD_REUSE_MAX&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','17')" name="question-detail17" value="3" id="group317">
<label for="group317" class="custom-control-label">C. PASSWORD_LIFE_TIME&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','17')" name="question-detail17" value="4" id="group417">
<label for="group417" class="custom-control-label">D. PASSWORD_REUSE_DAYS</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result17" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>A</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result17" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box17" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 19:</h4>


<p>Các nguồn nào chỉ ra giá trị tính theo phút?&nbsp;</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="2" id="answerNoRight18">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','18')" name="question-detail18" value="1" id="group118">
<label for="group118" class="custom-control-label">A. CPU_PER_SESSION</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','18')" name="question-detail18" value="2" id="group218">
<label for="group218" class="custom-control-label">B. CONNECT_TIME&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','18')" name="question-detail18" value="3" id="group318">
<label for="group318" class="custom-control-label">C. PASSWORD_LOCK_TIME&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','18')" name="question-detail18" value="4" id="group418">
<label for="group418" class="custom-control-label">D. All the above&nbsp;</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result18" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>B</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result18" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box18" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 20:</h4>


<p>Điều gì xảy ra khi tạo 1user mới và ko chỉ ra profile?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="3" id="answerNoRight19">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','19')" name="question-detail19" value="1" id="group119">
<label for="group119" class="custom-control-label">A. Oracle prompts you for a profile name.&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','19')" name="question-detail19" value="2" id="group219">
<label for="group219" class="custom-control-label">B. No profile is assigned to the user.&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','19')" name="question-detail19" value="3" id="group319">
<label for="group319" class="custom-control-label">C. Profile DEFAULT đƣợc gán.&nbsp;&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','19')" name="question-detail19" value="4" id="group419">
<label for="group419" class="custom-control-label">D. The SYSTEM profile is assigned.</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result19" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>C</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result19" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box19" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 21:</h4>


<p>Số lượng profile tối đa có thể gán cho 1user là bao nhiêu?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="1" id="answerNoRight20">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','20')" name="question-detail20" value="1" id="group120">
<label for="group120" class="custom-control-label">A. 1</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','20')" name="question-detail20" value="2" id="group220">
<label for="group220" class="custom-control-label">B. 2&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','20')" name="question-detail20" value="3" id="group320">
<label for="group320" class="custom-control-label">C. 32</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','20')" name="question-detail20" value="4" id="group420">
<label for="group420" class="custom-control-label">D. Unlimited&nbsp;</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result20" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>A</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result20" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box20" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 22:</h4>


<p>Lựa chọn nào sau đây là ko đúng?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="4" id="answerNoRight21">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','21')" name="question-detail21" value="1" id="group121">
<label for="group121" class="custom-control-label">A. Oracle creates a profile named DEFAULT when the database is&nbsp;
created</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','21')" name="question-detail21" value="2" id="group221">
<label for="group221" class="custom-control-label">B. Profiles cannot be renamed</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','21')" name="question-detail21" value="3" id="group321">
<label for="group321" class="custom-control-label">C. DEFAULT is a valid name for a profile resource</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','21')" name="question-detail21" value="4" id="group421">
<label for="group421" class="custom-control-label">D. Nguồn SESSIONS_PER_USER trong profile DEFAULT có gtrị khởi tạo là 5</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result21" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>D</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result21" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box21" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 23:</h4>


<p>Nguồn nào sau đây không dùng để tính COMPOSITE_LIMIT?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="4" id="answerNoRight22">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','22')" name="question-detail22" value="1" id="group122">
<label for="group122" class="custom-control-label">A. PRIVATE_SGA&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','22')" name="question-detail22" value="2" id="group222">
<label for="group222" class="custom-control-label">B. CPU_PER_SESSION&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','22')" name="question-detail22" value="3" id="group322">
<label for="group322" class="custom-control-label">C. CONNECT_TIME&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','22')" name="question-detail22" value="4" id="group422">
<label for="group422" class="custom-control-label">D. LOGICAL_READS_PER_CALL</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result22" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>D</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result22" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box22" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 24:</h4>


<p>Câu lệnh nào được dùng để gán profile cho user hiện tại?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="2" id="answerNoRight23">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','23')" name="question-detail23" value="1" id="group123">
<label for="group123" class="custom-control-label">A. ALTER PROFILE</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','23')" name="question-detail23" value="2" id="group223">
<label for="group223" class="custom-control-label">B. ALTER USER</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','23')" name="question-detail23" value="3" id="group323">
<label for="group323" class="custom-control-label">C. &nbsp;SET PROFILE</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','23')" name="question-detail23" value="4" id="group423">
<label for="group423" class="custom-control-label">D. The profile should be specified when creating the user; it cannot be&nbsp;changed</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result23" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>B</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result23" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box23" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
    <li>
<h4>Câu 25:</h4>


<p>Profile ko thể được sử dụng để hạn chế điều nào sau đây?</p>
<div class="part-item detail question-detail" style="padding: 10px">
<div class="question-answer-detail" data-type="0">
<!-- Single choice-->
<input type="hidden" value="4" id="answerNoRight24">
                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','1','24')" name="question-detail24" value="1" id="group124">
<label for="group124" class="custom-control-label">A. CPU time used&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','2','24')" name="question-detail24" value="2" id="group224">
<label for="group224" class="custom-control-label">B. Total time connected to the database&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','3','24')" name="question-detail24" value="3" id="group324">
<label for="group324" class="custom-control-label">C. Maximum time a session can be inactive&nbsp;</label>
</div>
                                                                                                                                                                    <div class="radio-control">
<input type="radio" class="custom-control-input" onchange="onCheckAnswer('simple','4','24')" name="question-detail24" value="4" id="group424">
<label for="group424" class="custom-control-label">D. Thời gian đọc các khối</label>
</div>
                                                                                                

</div>
<!--/Question-->
<!-- Quesition result-->
<div class="question-result">
<div class="result-row wrong-result24" hidden="">
<span class="badge incorrect"><i class="fa fa-times" aria-hidden="true"></i>Sai</span>
<span class="right-answer"><b>D</b> là đáp án đúng</span>
                                    </div>
<div class="result-row correct-result24" hidden="">
<span class="badge correct"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Chính xác</span>
                                    </div>
</div>
<!--The Answer-->
<div class="the-answer-box" id="the-answer-box24" hidden="">
<div class="answer-header">
<h2>Lời giải:</h2>
<a href="#" class="flag">Báo sai</a>
</div>
<div class="answer-result">

</div>
</div>
<!--/The Answer-->
</div>
</li>
</ul>