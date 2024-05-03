let questions = [
    {
      numb: 1,
      question: "What is the result of the following subtraction?",
      answer: "",
      options: []
    },
    {
      numb: 2,
      question: "What is the result of the following subtraction?",
      answer: "",
      options: []
    },
    {
      numb: 3,
      question: "What is the result of the following subtraction?",
      answer: "",
      options: []
    },
    {
      numb: 4,
      question: "What is the result of the following subtraction?",
      answer: "",
      options: []
    },
    {
      numb: 5,
      question: "What is the result of the following subtraction?",
      answer: "",
      options: []
    },
    {
        numb: 6,
        question: "What is the result of the following addition?",
        answer: "",
        options: []
      },
      {
        numb: 7,
        question: "What is the result of the following addition?",
        answer: "",
        options: []
      },{
        numb: 8,
        question: "What is the result of the following addition?",
        answer: "",
        options: []
      },{
        numb: 9,
        question: "What is the result of the following addition?",
        answer: "",
        options: []
      },
      {
        numb: 10,
        question: "What is the result of the following addition?",
        answer: "",
        options: []
      }

  ];
  
  // Generate random numbers for subtraction questions
  for (let i = 0; i < questions.length; i++) {
    let num1 = Math.floor(Math.random() * 50) + 1; // Generate random number between 1 and 50
    let num2 = Math.floor(Math.random() * num1); // Generate random number less than num1 to ensure positive result
    
    questions[i].question = `What is the result of ${num1} + ${num2}?`;
    questions[i].answer = (num1 + num2).toString();
  
    // Generate options
    const options = [];
    for (let j = 0; j < 4; j++) {
      let option;
      if (j === 0) {
        // Assign correct answer to options
        option = questions[i].answer;
      } else {
        // Generate random options
        option = Math.floor(Math.random() * 50) + 1; // Generate random number between 1 and 50
        // Ensure unique options (not equal to correct answer)
        while (options.includes(option) || option === questions[i].answer) {
          option = Math.floor(Math.random() * 50) + 1;
        }
      }
      options.push(option);
    }
    // Shuffle options
    questions[i].options = shuffle(options);
  }
  
  console.log(questions);
  
  // Shuffle function
  function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
  }
  