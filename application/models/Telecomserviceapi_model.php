<?phpdefined('BASEPATH') OR exit('No direct script access allowed');class Telecomserviceapi_model extends MY_model {    private $table = 'telecom_services';    public function __construct() {        parent::__construct();    }    /**     * To get all available plans for specific providers     * @param type $providerId     */    public function getPlanDataByProviderId($providerId) {        $sql = "SELECT ts.scheme_name,ts.scheme_id,tp.*                FROM `telecom_plan` AS tp                 JOIN `telecom_scheme` AS ts ON tp.scheme_id = ts.scheme_id                 WHERE provider_id = ?";        return $this->db->query($sql, array($providerId))->result();    }}