const canvas = document.getElementById("gameCanvas");
const ctx = canvas.getContext("2d");

const snakeSize = 20;
const width = canvas.width;
const height = canvas.height;

let snake = [{ x: 100, y: 100 }];
let snakeLength = 5;
let direction = "RIGHT";
let food = { x: 200, y: 200 };
let score = 0;
let gameInterval;

function drawSnake() {
  ctx.fillStyle = "green";
  snake.forEach((segment) => {
    ctx.fillRect(segment.x, segment.y, snakeSize, snakeSize);
  });
}

function drawFood() {
  ctx.fillStyle = "red";
  ctx.fillRect(food.x, food.y, snakeSize, snakeSize);
}

function update() {
  let head = { ...snake[0] };

  switch (direction) {
    case "UP":
      head.y -= snakeSize;
      break;
    case "DOWN":
      head.y += snakeSize;
      break;
    case "LEFT":
      head.x -= snakeSize;
      break;
    case "RIGHT":
      head.x += snakeSize;
      break;
  }

  snake.unshift(head);

  if (head.x === food.x && head.y === food.y) {
    score += 10;
    food = {
      x: Math.floor(Math.random() * (width / snakeSize)) * snakeSize,
      y: Math.floor(Math.random() * (height / snakeSize)) * snakeSize,
    };
  } else {
    snake.pop();
  }

  if (
    head.x < 0 ||
    head.x >= width ||
    head.y < 0 ||
    head.y >= height ||
    checkCollision(head)
  ) {
    clearInterval(gameInterval);
    alert("Game Over! Your score: " + score);
  }

  ctx.clearRect(0, 0, width, height);
  drawSnake();
  drawFood();
}

function checkCollision(head) {
  return snake
    .slice(1)
    .some((segment) => segment.x === head.x && segment.y === head.y);
}

function changeDirection(event) {
  switch (event.keyCode) {
    case 37: // Left arrow
      if (direction !== "RIGHT") direction = "LEFT";
      break;
    case 38: // Up arrow
      if (direction !== "DOWN") direction = "UP";
      break;
    case 39: // Right arrow
      if (direction !== "LEFT") direction = "RIGHT";
      break;
    case 40: // Down arrow
      if (direction !== "UP") direction = "DOWN";
      break;
  }
}

document.addEventListener("keydown", changeDirection);
gameInterval = setInterval(update, 100);
