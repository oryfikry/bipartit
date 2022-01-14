
const { DataTypes } = require("sequelize");

module.exports = (sequelize) => {
    const User = sequelize.define('User',{
       id:{
           type: DataType.INTEGER,
           primaryKey: true,
           autoIncrement: true,
           allowNull: false
       },
       name:{
           type: DataTypes.STRING,
           allowNull: false
       },
       email:{
            type: DataTypes.STRING,
            allowNull: false
        },
       is_receive:{
            type: DataTypes.STRING,
            allowNull: false
        },
       tableName: 'users'
    });

    return User;
}