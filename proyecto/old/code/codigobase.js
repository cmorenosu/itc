const playerTank = document.getElementById('playerTank');
let gameArea = document.getElementById('gameArea');

let tankPosition = {
    x: 280,
    y: 280,
    rotation: 0
};

const moveSpeed = 5;
const bulletSpeed = 10;
let bulletFired = false;

function moveTank(event) {
    let angle = tankPosition.rotation * (Math.PI / 180);
    let newX, newY;
    console.log(event.key);
    switch (event.key) {
        case 'ArrowUp':
            console.log("entra a up");
            newX = tankPosition.x + Math.cos(angle) * moveSpeed;
            newY = tankPosition.y + Math.sin(angle) * moveSpeed;
            if (!checkCollision(newX, newY)) {
                tankPosition.x = newX;
                tankPosition.y = newY;
            }
            break;
        case 'ArrowDown':
            console.log("entra a Down");
            newX = tankPosition.x - Math.cos(angle) * moveSpeed;
            newY = tankPosition.y - Math.sin(angle) * moveSpeed;
            if (!checkCollision(newX, newY)) {
                tankPosition.x = newX;
                tankPosition.y = newY;
            }
            break;
        case 'ArrowRight':
            tankPosition.rotation += 15;
            if (tankPosition.rotation >= 360) {
                tankPosition.rotation = 0;
            }
            break;
        case 'ArrowLeft':
            tankPosition.rotation -= 15;
            if (tankPosition.rotation < 0) {
                tankPosition.rotation = 345;
            }
            break;
        case 'a':
        case 'A':
            if (!bulletFired) {
                fireBullet();
            }
            break;
    }

    updateTankPosition();
}

function updateTankPosition() {
    playerTank.style.left = `${tankPosition.x}px`;
    playerTank.style.top = `${tankPosition.y}px`;
    playerTank.style.transform = `rotate(${tankPosition.rotation}deg)`;
}

function checkCollision(newX, newY) {
    const blocks = document.querySelectorAll('.block');
    let collisionDetected = false;

    blocks.forEach(block => {
        const blockRect = block.getBoundingClientRect();
        const tankRect = {
            left: newX,
            top: newY,
            right: newX + 40,
            bottom: newY + 40
        };

        if (!(tankRect.left > blockRect.right ||
              tankRect.right < blockRect.left ||
              tankRect.top > blockRect.bottom ||
              tankRect.bottom < blockRect.top)) {
            collisionDetected = true;
        }
    });

    return collisionDetected;
}

function fireBullet() {
    bulletFired = true;

    const bullet = document.createElement('div');
    bullet.className = 'bullet';
    gameArea.appendChild(bullet);

    let angle = tankPosition.rotation * (Math.PI / 180);
    let bulletX = tankPosition.x + 15;
    let bulletY = tankPosition.y + 15;

    bullet.style.left = `${bulletX}px`;
    bullet.style.top = `${bulletY}px`;
    bullet.style.display = 'block';

    const bulletInterval = setInterval(() => {
        bulletX += Math.cos(angle) * bulletSpeed;
        bulletY += Math.sin(angle) * bulletSpeed;

        bullet.style.left = `${bulletX}px`;
        bullet.style.top = `${bulletY}px`;

        // Detect bullet collision with blocks
        if (checkBulletCollision(bulletX, bulletY)) {
            bulletFired = false;
            bullet.remove();
            clearInterval(bulletInterval);
        }

        // Detect if bullet is out of bounds
        if (bulletX < 0 || bulletX > 590 || bulletY < 0 || bulletY > 590) {
            bulletFired = false;
            bullet.remove();
            clearInterval(bulletInterval);
        }
    }, 50);
}

function checkBulletCollision(bulletX, bulletY) {
    const blocks = document.querySelectorAll('.block');
    let collisionDetected = false;

    blocks.forEach(block => {
        const blockRect = block.getBoundingClientRect();
        const bulletRect = {
            left: bulletX,
            top: bulletY,
            right: bulletX + 10,
            bottom: bulletY + 10
        };

        if (!(bulletRect.left > blockRect.right ||
              bulletRect.right < blockRect.left ||
              bulletRect.top > blockRect.bottom ||
              bulletRect.bottom < blockRect.top)) {
            collisionDetected = true;
            block.remove();  // Elimina el bloque al colisionar
        }
    });

    return collisionDetected;
}

document.addEventListener('keydown', moveTank);
