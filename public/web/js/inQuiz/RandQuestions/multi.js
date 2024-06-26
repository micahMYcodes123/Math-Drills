let questions = [
    {
      numb: 1,
      question: "What is the result of the following multiplication?",
      answer: "",
      options: []
    },
    {
      numb: 2,
      question: "What is the result of the following multiplication?",
      answer: "",
      options: []
    },
    {
      numb: 3,
      question: "What is the result of the following multiplication?",
      answer: "",
      options: []
    },
    {
      numb: 4,
      question: "What is the result of the following multiplication?",
      answer: "",
      options: []
    },
    {
      numb: 5,
      question: "What is the result of the following multiplication?",
      answer: "",
      options: []
    },
    {
        numb: 6,
        question: "What is the result of the following multiplication?",
        answer: "",
        options: []
      },
      {
        numb: 7,
        question: "What is the result of the following multiplication?",
        answer: "",
        options: []
      },
      {
        numb: 8,
        question: "What is the result of the following multiplication?",
        answer: "",
        options: []
      },
      {
        numb: 9,
        question: "What is the result of the following multiplication?",
        answer: "",
        options: []
      },
      {
        numb: 10,
        question: "What is the result of the following multiplication?",
        answer: "",
        options: []
      }
  ];
  
  // Generate random numbers for multiplication questions
  for (let i = 0; i < questions.length; i++) {
    let num1 = Math.floor(Math.random() * 13); // Generate random number between 0 and 12
    let num2 = Math.floor(Math.random() * 13); // Generate random number between 0 and 12
    
    questions[i].question = `What is the result of ${num1} X ${num2}?`;
    questions[i].answer = (num1 * num2).toString();
  
    // Generate options
    const options = [];
    for (let j = 0; j < 4; j++) {
      let option;
      if (j === 0) {
        // Assign correct answer to options
        option = questions[i].answer;
      } else {
        // Generate random options
        option = Math.floor(Math.random() * 13) * Math.floor(Math.random() * 13); // Generate random number between 0 and 144
        // Ensure unique options (not equal to correct answer)
        while (options.includes(option) || option === questions[i].answer) {
          option = Math.floor(Math.random() * 13) * Math.floor(Math.random() * 13);
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
  