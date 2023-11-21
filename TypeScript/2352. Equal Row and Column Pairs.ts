// noinspection JSUnusedGlobalSymbols
const equalPairs = (grid: number[][]): number =>{
    const length: number = grid.length
    const rows = new Map<string,number>()
    const cols = new Map<string,number>()

    for (let i = 0; i < length; i++){
        const col = []
        const row = []
        for (let j = 0; j < length; j++){
            col.push(grid[i][j])
            row.push(grid[j][i])
        }
        const colKey = col.join('+')
        const rowKey = row.join('+')
        rows.set(colKey, (rows.get(colKey) || 0) + 1)
        cols.set(rowKey, (cols.get(rowKey) || 0) + 1)
    }

    let pairs = 0

    for (const [key, value] of cols.entries()){
        if (rows.has(key)){
            pairs += value * rows.get(key)!
        }
    }

    return pairs
}
