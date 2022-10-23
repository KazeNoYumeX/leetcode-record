const maximumUnits = (boxTypes, truckSize) => {
    boxTypes = boxTypes.sort((a, b) => a[1] > b[1] ? -1 : 0)
    let count = 0
    const red = (accumulator, curr) => accumulator * curr

    const reducer = (list, boxTypes) => {
        if (count >= truckSize) {
            return list
        }

        if (typeof list === 'object') {
            count += list[0]
            list = list.reduce(red)
        }

        if (typeof boxTypes === 'object') {
            if (count + boxTypes[0] >= truckSize) {
                boxTypes[0] = truckSize - count
            }

            count += boxTypes[0]
            boxTypes = boxTypes.reduce(red)
        }
        return list + boxTypes
    }
    return boxTypes.reduce(reducer)
}
