let solution;
let path = 0;
const N = 8;

function KnightTour() {
    solution = new Array[[N],[N]];
    for (let i = 0; i < N; i++) {
        for (let j = 0; j < N; j++) {
            solution[i][j] = 0;
        }
    }
}
 
    function solve(){
        if(findPath(0,0,0,solution.length)){
            print();
        }
        else{
            console.log("No path found");
        }
    }
 
 function findPath(row,column,index,N) {
    // check if current is not used already
    if (solution[row][column] != 0) {
        return false;
    }
    // mark the current cell is as used
    solution[row][column] = path++;
    // if (index == 50) {
    if (index == N * N - 1) {
        // if we are here means we have solved the problem
        return true;
    }
    // try to solve the rest of the problem recursively

    // go down and right
    if (canMove(row + 2, column + 1, N)
            && findPath(row + 2, column + 1, index + 1, N)) {
        return true;
    }
    // go right and down
    if (canMove(row + 1, column + 2, N)
            && findPath(row + 1, column + 2, index + 1, N)) {
        return true;
    }
    // go right and up
    if (canMove(row - 1, column + 2, N)
            && findPath(row - 1, column + 2, index + 1, N)) {
        return true;
    }
    // go up and right
    if (canMove(row - 2, column + 1, N)
            && findPath(row - 2, column + 1, index + 1, N)) {
        return true;
    }
    // go up and left
    if (canMove(row - 2, column - 1, N)
            && findPath(row - 2, column - 1, index + 1, N)) {
        return true;
    }
    // go left and up
    if (canMove(row - 1, column - 2, N)
            && findPath(row - 1, column - 2, index + 1, N)) {
        return true;
    }
    // go left and down
    if (canMove(row + 1, column - 2, N)
            && findPath(row + 1, column - 2, index + 1, N)) {
        return true;
    }
    // go down and left
    if (canMove(row + 2, column - 1, N)
            && findPath(row + 2, column - 1, index + 1, N)) {
        return true;
    }
    // if we are here means nothing has worked , backtrack
    solution[row][column] = 0;
    path--;
    return false;

}

function canMove(row,col,N){
    if(row >= 0 && col >= 0 && row < N && col < N){
        return true;
    }
    return false;
}

function print(){
    for (let i = 0; i<solution.length; i++) {
        for (let i = 0; i<solution.length; i++) {
            console.log(solution[i][j]);
            }
        }
    }

