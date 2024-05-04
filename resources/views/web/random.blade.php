@extends('layout.layout')
@section('content')
<li class="menu-item current-menu-item"><a href="http://127.0.0.1:8000/"><img src="web/dummy/home.png" alt=""></a></li>

    <!-- start Quiz button -->
    <div class="start_btn"><button>Start Drill</button></div>
    <div style="text-align: center;">
    <img src="web/dummy/pngegg11.png" alt="">
    </div>

    <!-- Info Box -->

    <div class="info_box">
        <div class="info-title"><span>Random Drills Rules Are:</span></div>
        <div class="info-list">
            <div class="info">1. You will have only <span>10 seconds</span> per each drill.</div>
            <div class="info">2. These are <span>Random</span> Drills.</div>
            <div class="info">3. Once you select your answer, it can't be undone.</div>
            <div class="info">4. You can't select any option once time goes off.</div>
            <div class="info">5. You can't exit from the Drill while you're playing.</div>
            <div class="info">6. You'll get points on the basis of your correct answers.</div>
            <div class="info">7. The Maths equations(operators and Operands) are generated randomly</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit</button>
            <button class="restart">Continue</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Awesome Quiz Application</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">10</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- Here I've inserted question from JavaScript -->
                
            </div>
            <div class="option_list">
                <!-- Here I've inserted options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!-- Here I've inserted Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Next Que</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">You've completed Drill!</div>
        <div class="score_text">
            <!-- Here I've inserted Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Replay</button>
            <button class="quit">Quit </button>
        </div>
    </div>
      <!-- Inside this JavaScript file I've inserted Questions and Options only -->
      <script src="{{asset("web/js/inQuiz/RandQuestions/randomQuestion.js")}}"></script>

@endsection