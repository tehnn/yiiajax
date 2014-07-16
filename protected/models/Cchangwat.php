<?php

/**
 * This is the model class for table "cchangwat".
 *
 * The followings are the available columns in table 'cchangwat':
 * @property string $changwatcode
 * @property string $changwatname
 * @property string $zonecode
 */
class Cchangwat extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'cchangwat';
    }

    public function getChangwatname2() { // เอา 2 ฟิลด์มาต่อกัน
        return $this->changwatcode . "-" . $this->changwatname;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('changwatcode', 'required'),
            array('changwatcode, zonecode', 'length', 'max' => 2),
            array('changwatname', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('changwatcode, changwatname, zonecode', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'changwatcode' => 'Changwatcode',
            'changwatname' => 'Changwatname',
            'zonecode' => 'Zonecode',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('changwatcode', $this->changwatcode, true);
        $criteria->compare('changwatname', $this->changwatname, true);
        $criteria->compare('zonecode', $this->zonecode, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Cchangwat the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
