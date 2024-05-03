// creating an array and passing the number, questions, options, and answers
let questions = [
  {
    numb: 1,
    question: "What is the result of the following addition?",
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
    question: "What is the result of the following multiplication?",
    answer: "",
    options: []
  },
  {
    numb: 4,
    question: "What is the result of the following division?",
    answer: "",
    options: []
  },
  {
    numb: 5,
    question: "What is the result of the following addition?",
    answer: "",
    options: []
  },
  {
    numb: 6,
    question: "What is the result of the following division?",
    answer: "",
    options: []
  },
  {
    numb: 7,
    question: "What is the result of the following division?",
    answer: "",
    options: []
  },
  {
    numb: 8,
    question: "What is the result of the following division?",
    answer: "",
    options: []
  },
  {
    numb: 9,
    question: "What is the result of the following division?",
    answer: "",
    options: []
  },
  {
    numb: 10,
    question: "What is the result of the following division?",
    answer: "",
    options: []
  },


];

// Generate random numbers for questions
for (let i = 0; i < questions.length; i++) {
  const operation = Math.floor(Math.random() * 4); // 0: addition, 1: subtraction, 2: multiplication, 3: division
  let num1, num2;

  switch (operation) {
    case 0:
      num1 = Math.floor(Math.random() * 50); // Generate random number less than 50
      num2 = Math.floor(Math.random() * 50); // Generate random number less than 50
      questions[i].question = `What is the result of ${num1} + ${num2}?`;
      questions[i].answer = (num1 + num2).toString();
      break;
    case 1:
      num1 = Math.floor(Math.random() * 50); // Generate random number less than 50
      num2 = Math.floor(Math.random() * num1); // Generate random number less than num1 to ensure positive result
      questions[i].question = `What is the result of ${num1} - ${num2}?`;
      questions[i].answer = (num1 - num2).toString();
      break;
    case 2:
      num1 = Math.floor(Math.random() * 13); // Generate random number less than or equal to 12
      num2 = Math.floor(Math.random() * 13); // Generate random number less than or equal to 12
      questions[i].question = `What is the result of ${num1} * ${num2}?`;
      questions[i].answer = (num1 * num2).toString();
      break;
    case 3:
      num1 = Math.floor(Math.random() * 50) + 1; // Generate random number between 1 and 50
      num2 = Math.floor(Math.random() * 10) + 1; // Generate random number between 1 and 10 for divisor
      questions[i].question = `What is the result of ${num1} ÷ ${num2}?`;
      questions[i].answer = (num1 / num2).toFixed(2).toString();
      break;
    default:
      break;
  }
  
  // Generate options
  const options = [];
  for (let j = 0; j < 4; j++) {
    let option;
    if (j === 0) {
      // Assign correct answer to options
      option = questions[i].answer;
    } else {
      // Generate random options
      option = generateRandomOption(operation);
      // Ensure unique options (not equal to correct answer)
      while (options.includes(option) || option === questions[i].answer) {
        option = generateRandomOption(operation);
      }
    }
    options.push(option);
  }
  // Shuffle options
  questions[i].options = shuffle(options);
}

console.log(questions);

// Function to generate random option based on operation
function generateRandomOption(operation) {
  switch (operation) {
    case 0: // Addition
    case 1: // Subtraction
      return Math.floor(Math.random() * 100); // Generate random number less than 100
    case 2: // Multiplication
      return Math.floor(Math.random() * 13); // Generate random number less than or equal to 12
    case 3: // Division
      return Math.floor(Math.random() * 100) + 1; // Generate random number between 1 and 100
    default:
      return 0;
  }
}

// Shuffle function
function shuffle(array) {
  for (let i = array.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
  return array;
}

