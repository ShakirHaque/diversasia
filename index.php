<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>An Introduction to Machine Learning and AI - Accessible Course</title>
  <style>
    body {
      font-family: Verdana, Arial, sans-serif; /* Sans-serif font for readability */
      font-size: 16px; /* Increased base font size */
      color: #000000; /* High contrast black text */
      background-color: #fcfcf0; /* Soft cream background */
      margin: 20px;
      line-height: 1.5; /* Line height 1.5 times font size */
    }

    h1 {
      font-size: 32px; /* Larger font size for main heading */
      text-align: center;
      text-decoration: none; /* No underlining */
      margin-bottom: 25px; /* Spacing below heading */
      font-weight: bold; /* Bold for emphasis */
    }

    h2 {
      font-size: 24px; /* Larger font size for section headings */
      margin-top: 30px; /* Spacing above heading */
      margin-bottom: 15px; /* Spacing below heading */
      font-weight: bold; /* Bold for emphasis */
    }

    p {
      margin-bottom: 1.5em; /* Spacing following paragraphs at least 2 times font size (1.5em is approx 24px for 16px font) */
    }

    ul {
      margin-left: 20px;
      padding: 0;
      list-style-type: disc; /* Ensure bullet points are visible */
      margin-bottom: 1.5em;
    }

    li {
      margin-bottom: 0.5em; /* Spacing between list items */
    }

    /* Layout for "Applications of AI and ML" - using flexbox for responsiveness and accessibility */
    .applications-grid {
      display: grid;
      grid-template-columns: 1fr 1fr; /* Two columns */
      gap: 10px; /* Spacing between items */
      margin-top: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc; /* Border for visual grouping */
      padding: 8px;
    }

    .applications-item {
      padding: 5px;
      text-align: center;
    }

    /* Standard button styling */
    button {
      background-color: #0056b3; /* Darker blue */
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      margin-top: 25px; /* Spacing above button */
      font-size: 18px; /* Larger font size for button text */
      border-radius: 5px; /* Slightly rounded corners */
      transition: background-color 0.3s ease; /* Smooth hover effect */
    }

    button:hover {
      background-color: #003d80; /* Darker on hover */
    }

    button:focus {
      outline: 3px solid #0056b3; /* Visible focus outline */
      outline-offset: 2px;
    }

    img {
      max-width: 100%;
      height: auto;
      margin-top: 15px;
      margin-bottom: 15px;
      display: block; /* Ensure images are on their own line */
    }

    a {
      color: #0000ff; /* Standard link color */
      text-decoration: underline; /* Underline for clarity */
    }

    a:hover {
      text-decoration: none;
    }

    /* Ensuring bold text is used judiciously */
    strong {
      font-weight: bold;
    }
  </style>
</head>
<body>

  <h1>An Introduction to Machine Learning and Artificial Intelligence</h1>

  <h2>What is Artificial Intelligence?</h2>
  <p>
    Artificial Intelligence (AI) is the branch of computer science that aims to create machines capable of intelligent behavior.
  </p>

  <h2>Machine Learning Overview</h2>
  <p>
    Machine Learning (ML) is a subset of AI that allows computers to learn from data without being explicitly programmed.
  </p>

  <h2>Types of Machine Learning</h2>
  <ul>
    <li>Supervised Learning</li>
    <li>Unsupervised Learning</li>
    <li>Reinforcement Learning</li>
  </ul>

  <h2>Applications of AI and ML</h2>
  <div class="applications-grid" role="group" aria-labelledby="applications-heading">
    <div class="applications-item">Image Recognition</div>
    <div class="applications-item">Natural Language Processing</div>
    <div class="applications-item">Autonomous Vehicles</div>
    <div class="applications-item">Recommendation Systems</div>
  </div>

  <h2>Basic Concepts</h2>
  <p>
    <strong>Data:</strong> Raw information used to train models.<br>
    <strong>Features:</strong> Individual measurable properties or characteristics of data.<br>
    <strong>Model:</strong> Mathematical representation learned from data.<br>
    <strong>Training:</strong> Process of teaching a model using data.<br>
    <strong>Evaluation:</strong> Assessing model performance.
  </p>

  <h2>Example Algorithms</h2>
  <ul>
    <li>Linear Regression</li>
    <li>Decision Trees</li>
    <li>Neural Networks</li>
  </ul>

  <img src="ml_diagram.png" alt="A diagram illustrating the machine learning workflow, showing data input, model training, and prediction output." />
  <img src="ai_robot.png" alt="A depiction of an AI robot, symbolizing artificial intelligence." />

  <p>
    <a href="https://en.wikipedia.org/wiki/Machine_learning" target="_blank" rel="noopener noreferrer">Learn more about Machine Learning (opens in new tab)</a>
  </p>
  <p>
    <a href="https://en.wikipedia.org/wiki/Artificial_intelligence" target="_blank" rel="noopener noreferrer">Learn more about Artificial Intelligence (opens in new tab)</a>
  </p>

  <button type="button" onclick="alert('Thank you for completing the course!')">Finish Course</button>

</body>
</html>
