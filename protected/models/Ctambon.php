<?php

/**
 * This is the model class for table "ctambon".
 *
 * The followings are the available columns in table 'ctambon':
 * @property string $tamboncode
 * @property string $tambonname
 * @property string $ampurcode
 * @property string $changwatcode
 */
class Ctambon extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'ctambon';
    }

    public function getTambonname2() {
        return $this->tamboncode . "-" . $this->tambonname;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('tamboncode, ampurcode, changwatcode', 'required'),
            array('tamboncode, ampurcode, changwatcode', 'length', 'max' => 2),
            array('tambonname', 'length', 'max' => 255),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('tamboncode, tambonname, ampurcode, changwatcode', 'safe', 'on' => 'search'),
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
            'tamboncode' => 'Tamboncode',
            'tambonname' => 'Tambonname',
            'ampurcode' => 'Ampurcode',
            'changwatcode' => 'Changwatcode',
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

        $criteria->compare('tamboncode', $this->tamboncode, true);
        $criteria->compare('tambonname', $this->tambonname, true);
        $criteria->compare('ampurcode', $this->ampurcode, true);
        $criteria->compare('changwatcode', $this->changwatcode, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Ctambon the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
