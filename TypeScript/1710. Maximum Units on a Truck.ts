// noinspection JSUnusedGlobalSymbols
const maximumUnits = (boxTypes: number[][], truckSize: number): number => {
  let boxes = 0

  boxTypes = boxTypes.sort((a, b) => b[1] - a[1])

  boxTypes.forEach((box) => {
    const amount = Math.min(truckSize, box[0])
    boxes += amount * box[1]
    truckSize -= amount

    if (truckSize === 0) {
      return boxes
    }
  })

  return boxes
}
