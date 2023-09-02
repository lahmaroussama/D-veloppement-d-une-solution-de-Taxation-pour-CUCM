<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpCdr011
 *
 * @ORM\Table(name="exp_cdr011")
 * @ORM\Entity(repositoryClass=ExpCdr011Repository::class)
 */
class ExpCdr011
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="cdrRecordType", type="integer", nullable=true)
     */
    private $cdrrecordtype;

    /**
     * @var int|null
     *
     * @ORM\Column(name="globalCallID_callManagerId", type="integer", nullable=true)
     */
    private $globalcallidCallmanagerid;

    /**
     * @var int
     *
     * @ORM\Column(name="globalCallID_callId", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $globalcallidCallid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origLegCallIdentifier", type="integer", nullable=true)
     */
    private $origlegcallidentifier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dateTimeOrigination", type="integer", nullable=true)
     */
    private $datetimeorigination;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origNodeId", type="integer", nullable=true)
     */
    private $orignodeid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origSpan", type="integer", nullable=true)
     */
    private $origspan;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origIpAddr", type="integer", nullable=true)
     */
    private $origipaddr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="callingPartyNumber", type="integer", nullable=true)
     */
    private $callingpartynumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="callingPartyUnicodeLoginUserID", type="string", length=4, nullable=true)
     */
    private $callingpartyunicodeloginuserid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origCause_location", type="integer", nullable=true)
     */
    private $origcauseLocation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origCause_value", type="integer", nullable=true)
     */
    private $origcauseValue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origPrecedenceLevel", type="integer", nullable=true)
     */
    private $origprecedencelevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origMediaTransportAddress_IP", type="integer", nullable=true)
     */
    private $origmediatransportaddressIp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origMediaTransportAddress_Port", type="integer", nullable=true)
     */
    private $origmediatransportaddressPort;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origMediaCap_payloadCapability", type="integer", nullable=true)
     */
    private $origmediacapPayloadcapability;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origMediaCap_maxFramesPerPacket", type="integer", nullable=true)
     */
    private $origmediacapMaxframesperpacket;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origMediaCap_g723BitRate", type="integer", nullable=true)
     */
    private $origmediacapG723bitrate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origVideoCap_Codec", type="integer", nullable=true)
     */
    private $origvideocapCodec;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origVideoCap_Bandwidth", type="integer", nullable=true)
     */
    private $origvideocapBandwidth;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origVideoCap_Resolution", type="integer", nullable=true)
     */
    private $origvideocapResolution;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origVideoTransportAddress_IP", type="integer", nullable=true)
     */
    private $origvideotransportaddressIp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origVideoTransportAddress_Port", type="integer", nullable=true)
     */
    private $origvideotransportaddressPort;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origRSVPAudioStat", type="integer", nullable=true)
     */
    private $origrsvpaudiostat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origRSVPVideoStat", type="integer", nullable=true)
     */
    private $origrsvpvideostat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destLegIdentifier", type="integer", nullable=true)
     */
    private $destlegidentifier;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destNodeId", type="integer", nullable=true)
     */
    private $destnodeid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destSpan", type="integer", nullable=true)
     */
    private $destspan;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destIpAddr", type="integer", nullable=true)
     */
    private $destipaddr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="originalCalledPartyNumber", type="integer", nullable=true)
     */
    private $originalcalledpartynumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="finalCalledPartyNumber", type="integer", nullable=true)
     */
    private $finalcalledpartynumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="finalCalledPartyUnicodeLoginUserID", type="string", length=1, nullable=true)
     */
    private $finalcalledpartyunicodeloginuserid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destCause_location", type="integer", nullable=true)
     */
    private $destcauseLocation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destCause_value", type="integer", nullable=true)
     */
    private $destcauseValue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destPrecedenceLevel", type="integer", nullable=true)
     */
    private $destprecedencelevel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destMediaTransportAddress_IP", type="integer", nullable=true)
     */
    private $destmediatransportaddressIp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destMediaTransportAddress_Port", type="integer", nullable=true)
     */
    private $destmediatransportaddressPort;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destMediaCap_payloadCapability", type="integer", nullable=true)
     */
    private $destmediacapPayloadcapability;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destMediaCap_maxFramesPerPacket", type="integer", nullable=true)
     */
    private $destmediacapMaxframesperpacket;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destMediaCap_g723BitRate", type="integer", nullable=true)
     */
    private $destmediacapG723bitrate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destVideoCap_Codec", type="integer", nullable=true)
     */
    private $destvideocapCodec;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destVideoCap_Bandwidth", type="integer", nullable=true)
     */
    private $destvideocapBandwidth;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destVideoCap_Resolution", type="integer", nullable=true)
     */
    private $destvideocapResolution;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destVideoTransportAddress_IP", type="integer", nullable=true)
     */
    private $destvideotransportaddressIp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destVideoTransportAddress_Port", type="integer", nullable=true)
     */
    private $destvideotransportaddressPort;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destRSVPAudioStat", type="integer", nullable=true)
     */
    private $destrsvpaudiostat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destRSVPVideoStat", type="integer", nullable=true)
     */
    private $destrsvpvideostat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dateTimeConnect", type="integer", nullable=true)
     */
    private $datetimeconnect;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dateTimeDisconnect", type="integer", nullable=true)
     */
    private $datetimedisconnect;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lastRedirectDn", type="integer", nullable=true)
     */
    private $lastredirectdn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pkid", type="string", length=36, nullable=true)
     */
    private $pkid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="originalCalledPartyNumberPartition", type="string", length=7, nullable=true)
     */
    private $originalcalledpartynumberpartition;

    /**
     * @var string|null
     *
     * @ORM\Column(name="callingPartyNumberPartition", type="string", length=10, nullable=true)
     */
    private $callingpartynumberpartition;

    /**
     * @var string|null
     *
     * @ORM\Column(name="finalCalledPartyNumberPartition", type="string", length=7, nullable=true)
     */
    private $finalcalledpartynumberpartition;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastRedirectDnPartition", type="string", length=7, nullable=true)
     */
    private $lastredirectdnpartition;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="origDeviceName", type="string", length=15, nullable=true)
     */
    private $origdevicename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="destDeviceName", type="string", length=12, nullable=true)
     */
    private $destdevicename;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origCallTerminationOnBehalfOf", type="integer", nullable=true)
     */
    private $origcallterminationonbehalfof;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destCallTerminationOnBehalfOf", type="integer", nullable=true)
     */
    private $destcallterminationonbehalfof;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origCalledPartyRedirectOnBehalfOf", type="integer", nullable=true)
     */
    private $origcalledpartyredirectonbehalfof;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lastRedirectRedirectOnBehalfOf", type="integer", nullable=true)
     */
    private $lastredirectredirectonbehalfof;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origCalledPartyRedirectReason", type="integer", nullable=true)
     */
    private $origcalledpartyredirectreason;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lastRedirectRedirectReason", type="integer", nullable=true)
     */
    private $lastredirectredirectreason;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destConversationId", type="integer", nullable=true)
     */
    private $destconversationid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="globalCallId_ClusterID", type="string", length=17, nullable=true)
     */
    private $globalcallidClusterid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="joinOnBehalfOf", type="integer", nullable=true)
     */
    private $joinonbehalfof;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=10, nullable=true)
     */
    private $comment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="authCodeDescription", type="string", length=10, nullable=true)
     */
    private $authcodedescription;

    /**
     * @var int|null
     *
     * @ORM\Column(name="authorizationLevel", type="integer", nullable=true)
     */
    private $authorizationlevel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="clientMatterCode", type="string", length=10, nullable=true)
     */
    private $clientmattercode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origDTMFMethod", type="integer", nullable=true)
     */
    private $origdtmfmethod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destDTMFMethod", type="integer", nullable=true)
     */
    private $destdtmfmethod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="callSecuredStatus", type="integer", nullable=true)
     */
    private $callsecuredstatus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origConversationId", type="integer", nullable=true)
     */
    private $origconversationid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origMediaCap_Bandwidth", type="integer", nullable=true)
     */
    private $origmediacapBandwidth;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destMediaCap_Bandwidth", type="integer", nullable=true)
     */
    private $destmediacapBandwidth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="authorizationCodeValue", type="string", length=10, nullable=true)
     */
    private $authorizationcodevalue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="outpulsedCallingPartyNumber", type="string", length=10, nullable=true)
     */
    private $outpulsedcallingpartynumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="outpulsedCalledPartyNumber", type="string", length=10, nullable=true)
     */
    private $outpulsedcalledpartynumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="origIpv4v6Addr", type="string", length=14, nullable=true)
     */
    private $origipv4v6addr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="destIpv4v6Addr", type="string", length=15, nullable=true)
     */
    private $destipv4v6addr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origVideoCap_Codec_Channel2", type="integer", nullable=true)
     */
    private $origvideocapCodecChannel2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origVideoCap_Bandwidth_Channel2", type="integer", nullable=true)
     */
    private $origvideocapBandwidthChannel2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origVideoCap_Resolution_Channel2", type="integer", nullable=true)
     */
    private $origvideocapResolutionChannel2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origVideoTransportAddress_IP_Channel2", type="integer", nullable=true)
     */
    private $origvideotransportaddressIpChannel2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origVideoTransportAddress_Port_Channel2", type="integer", nullable=true)
     */
    private $origvideotransportaddressPortChannel2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origVideoChannel_Role_Channel2", type="integer", nullable=true)
     */
    private $origvideochannelRoleChannel2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destVideoCap_Codec_Channel2", type="integer", nullable=true)
     */
    private $destvideocapCodecChannel2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destVideoCap_Bandwidth_Channel2", type="integer", nullable=true)
     */
    private $destvideocapBandwidthChannel2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destVideoCap_Resolution_Channel2", type="integer", nullable=true)
     */
    private $destvideocapResolutionChannel2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destVideoTransportAddress_IP_Channel2", type="integer", nullable=true)
     */
    private $destvideotransportaddressIpChannel2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destVideoTransportAddress_Port_Channel2", type="integer", nullable=true)
     */
    private $destvideotransportaddressPortChannel2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destVideoChannel_Role_Channel2", type="integer", nullable=true)
     */
    private $destvideochannelRoleChannel2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="incomingProtocolID", type="integer", nullable=true)
     */
    private $incomingprotocolid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="incomingProtocolCallRef", type="string", length=10, nullable=true)
     */
    private $incomingprotocolcallref;

    /**
     * @var int|null
     *
     * @ORM\Column(name="outgoingProtocolID", type="integer", nullable=true)
     */
    private $outgoingprotocolid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="outgoingProtocolCallRef", type="string", length=32, nullable=true)
     */
    private $outgoingprotocolcallref;

    /**
     * @var int|null
     *
     * @ORM\Column(name="currentRoutingReason", type="integer", nullable=true)
     */
    private $currentroutingreason;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origRoutingReason", type="integer", nullable=true)
     */
    private $origroutingreason;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lastRedirectingRoutingReason", type="integer", nullable=true)
     */
    private $lastredirectingroutingreason;

    /**
     * @var string|null
     *
     * @ORM\Column(name="huntPilotDN", type="string", length=10, nullable=true)
     */
    private $huntpilotdn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="huntPilotPartition", type="string", length=10, nullable=true)
     */
    private $huntpilotpartition;

    /**
     * @var int|null
     *
     * @ORM\Column(name="calledPartyPatternUsage", type="integer", nullable=true)
     */
    private $calledpartypatternusage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="outpulsedOriginalCalledPartyNumber", type="string", length=10, nullable=true)
     */
    private $outpulsedoriginalcalledpartynumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="outpulsedLastRedirectingNumber", type="string", length=10, nullable=true)
     */
    private $outpulsedlastredirectingnumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="wasCallQueued", type="integer", nullable=true)
     */
    private $wascallqueued;

    /**
     * @var int|null
     *
     * @ORM\Column(name="totalWaitTimeInQueue", type="integer", nullable=true)
     */
    private $totalwaittimeinqueue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="callingPartyNumber_uri", type="string", length=12, nullable=true)
     */
    private $callingpartynumberUri;

    /**
     * @var string|null
     *
     * @ORM\Column(name="originalCalledPartyNumber_uri", type="string", length=10, nullable=true)
     */
    private $originalcalledpartynumberUri;

    /**
     * @var string|null
     *
     * @ORM\Column(name="finalCalledPartyNumber_uri", type="string", length=10, nullable=true)
     */
    private $finalcalledpartynumberUri;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastRedirectDn_uri", type="string", length=10, nullable=true)
     */
    private $lastredirectdnUri;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mobileCallingPartyNumber", type="string", length=10, nullable=true)
     */
    private $mobilecallingpartynumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="finalMobileCalledPartyNumber", type="string", length=10, nullable=true)
     */
    private $finalmobilecalledpartynumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="origMobileDeviceName", type="string", length=10, nullable=true)
     */
    private $origmobiledevicename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="destMobileDeviceName", type="string", length=10, nullable=true)
     */
    private $destmobiledevicename;

    /**
     * @var int|null
     *
     * @ORM\Column(name="origMobileCallDuration", type="integer", nullable=true)
     */
    private $origmobilecallduration;

    /**
     * @var int|null
     *
     * @ORM\Column(name="destMobileCallDuration", type="integer", nullable=true)
     */
    private $destmobilecallduration;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mobileCallType", type="integer", nullable=true)
     */
    private $mobilecalltype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="originalCalledPartyPattern", type="string", length=16, nullable=true)
     */
    private $originalcalledpartypattern;

    /**
     * @var string|null
     *
     * @ORM\Column(name="finalCalledPartyPattern", type="string", length=16, nullable=true)
     */
    private $finalcalledpartypattern;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastRedirectingPartyPattern", type="string", length=16, nullable=true)
     */
    private $lastredirectingpartypattern;

    /**
     * @var string|null
     *
     * @ORM\Column(name="huntPilotPattern", type="string", length=10, nullable=true)
     */
    private $huntpilotpattern;

    public function getCdrrecordtype(): ?int
    {
        return $this->cdrrecordtype;
    }

    public function setCdrrecordtype(?int $cdrrecordtype): self
    {
        $this->cdrrecordtype = $cdrrecordtype;

        return $this;
    }

    public function getGlobalcallidCallmanagerid(): ?int
    {
        return $this->globalcallidCallmanagerid;
    }

    public function setGlobalcallidCallmanagerid(?int $globalcallidCallmanagerid): self
    {
        $this->globalcallidCallmanagerid = $globalcallidCallmanagerid;

        return $this;
    }

    public function getGlobalcallidCallid(): ?int
    {
        return $this->globalcallidCallid;
    }

    public function getOriglegcallidentifier(): ?int
    {
        return $this->origlegcallidentifier;
    }

    public function setOriglegcallidentifier(?int $origlegcallidentifier): self
    {
        $this->origlegcallidentifier = $origlegcallidentifier;

        return $this;
    }

    public function getDatetimeorigination(): ?int
    {
        return $this->datetimeorigination;
    }

    public function setDatetimeorigination(?int $datetimeorigination): self
    {
        $this->datetimeorigination = $datetimeorigination;

        return $this;
    }

    public function getOrignodeid(): ?int
    {
        return $this->orignodeid;
    }

    public function setOrignodeid(?int $orignodeid): self
    {
        $this->orignodeid = $orignodeid;

        return $this;
    }

    public function getOrigspan(): ?int
    {
        return $this->origspan;
    }

    public function setOrigspan(?int $origspan): self
    {
        $this->origspan = $origspan;

        return $this;
    }

    public function getOrigipaddr(): ?int
    {
        return $this->origipaddr;
    }

    public function setOrigipaddr(?int $origipaddr): self
    {
        $this->origipaddr = $origipaddr;

        return $this;
    }

    public function getCallingpartynumber(): ?int
    {
        return $this->callingpartynumber;
    }

    public function setCallingpartynumber(?int $callingpartynumber): self
    {
        $this->callingpartynumber = $callingpartynumber;

        return $this;
    }

    public function getCallingpartyunicodeloginuserid(): ?string
    {
        return $this->callingpartyunicodeloginuserid;
    }

    public function setCallingpartyunicodeloginuserid(?string $callingpartyunicodeloginuserid): self
    {
        $this->callingpartyunicodeloginuserid = $callingpartyunicodeloginuserid;

        return $this;
    }

    public function getOrigcauseLocation(): ?int
    {
        return $this->origcauseLocation;
    }

    public function setOrigcauseLocation(?int $origcauseLocation): self
    {
        $this->origcauseLocation = $origcauseLocation;

        return $this;
    }

    public function getOrigcauseValue(): ?int
    {
        return $this->origcauseValue;
    }

    public function setOrigcauseValue(?int $origcauseValue): self
    {
        $this->origcauseValue = $origcauseValue;

        return $this;
    }

    public function getOrigprecedencelevel(): ?int
    {
        return $this->origprecedencelevel;
    }

    public function setOrigprecedencelevel(?int $origprecedencelevel): self
    {
        $this->origprecedencelevel = $origprecedencelevel;

        return $this;
    }

    public function getOrigmediatransportaddressIp(): ?int
    {
        return $this->origmediatransportaddressIp;
    }

    public function setOrigmediatransportaddressIp(?int $origmediatransportaddressIp): self
    {
        $this->origmediatransportaddressIp = $origmediatransportaddressIp;

        return $this;
    }

    public function getOrigmediatransportaddressPort(): ?int
    {
        return $this->origmediatransportaddressPort;
    }

    public function setOrigmediatransportaddressPort(?int $origmediatransportaddressPort): self
    {
        $this->origmediatransportaddressPort = $origmediatransportaddressPort;

        return $this;
    }

    public function getOrigmediacapPayloadcapability(): ?int
    {
        return $this->origmediacapPayloadcapability;
    }

    public function setOrigmediacapPayloadcapability(?int $origmediacapPayloadcapability): self
    {
        $this->origmediacapPayloadcapability = $origmediacapPayloadcapability;

        return $this;
    }

    public function getOrigmediacapMaxframesperpacket(): ?int
    {
        return $this->origmediacapMaxframesperpacket;
    }

    public function setOrigmediacapMaxframesperpacket(?int $origmediacapMaxframesperpacket): self
    {
        $this->origmediacapMaxframesperpacket = $origmediacapMaxframesperpacket;

        return $this;
    }

    public function getOrigmediacapG723bitrate(): ?int
    {
        return $this->origmediacapG723bitrate;
    }

    public function setOrigmediacapG723bitrate(?int $origmediacapG723bitrate): self
    {
        $this->origmediacapG723bitrate = $origmediacapG723bitrate;

        return $this;
    }

    public function getOrigvideocapCodec(): ?int
    {
        return $this->origvideocapCodec;
    }

    public function setOrigvideocapCodec(?int $origvideocapCodec): self
    {
        $this->origvideocapCodec = $origvideocapCodec;

        return $this;
    }

    public function getOrigvideocapBandwidth(): ?int
    {
        return $this->origvideocapBandwidth;
    }

    public function setOrigvideocapBandwidth(?int $origvideocapBandwidth): self
    {
        $this->origvideocapBandwidth = $origvideocapBandwidth;

        return $this;
    }

    public function getOrigvideocapResolution(): ?int
    {
        return $this->origvideocapResolution;
    }

    public function setOrigvideocapResolution(?int $origvideocapResolution): self
    {
        $this->origvideocapResolution = $origvideocapResolution;

        return $this;
    }

    public function getOrigvideotransportaddressIp(): ?int
    {
        return $this->origvideotransportaddressIp;
    }

    public function setOrigvideotransportaddressIp(?int $origvideotransportaddressIp): self
    {
        $this->origvideotransportaddressIp = $origvideotransportaddressIp;

        return $this;
    }

    public function getOrigvideotransportaddressPort(): ?int
    {
        return $this->origvideotransportaddressPort;
    }

    public function setOrigvideotransportaddressPort(?int $origvideotransportaddressPort): self
    {
        $this->origvideotransportaddressPort = $origvideotransportaddressPort;

        return $this;
    }

    public function getOrigrsvpaudiostat(): ?int
    {
        return $this->origrsvpaudiostat;
    }

    public function setOrigrsvpaudiostat(?int $origrsvpaudiostat): self
    {
        $this->origrsvpaudiostat = $origrsvpaudiostat;

        return $this;
    }

    public function getOrigrsvpvideostat(): ?int
    {
        return $this->origrsvpvideostat;
    }

    public function setOrigrsvpvideostat(?int $origrsvpvideostat): self
    {
        $this->origrsvpvideostat = $origrsvpvideostat;

        return $this;
    }

    public function getDestlegidentifier(): ?int
    {
        return $this->destlegidentifier;
    }

    public function setDestlegidentifier(?int $destlegidentifier): self
    {
        $this->destlegidentifier = $destlegidentifier;

        return $this;
    }

    public function getDestnodeid(): ?int
    {
        return $this->destnodeid;
    }

    public function setDestnodeid(?int $destnodeid): self
    {
        $this->destnodeid = $destnodeid;

        return $this;
    }

    public function getDestspan(): ?int
    {
        return $this->destspan;
    }

    public function setDestspan(?int $destspan): self
    {
        $this->destspan = $destspan;

        return $this;
    }

    public function getDestipaddr(): ?int
    {
        return $this->destipaddr;
    }

    public function setDestipaddr(?int $destipaddr): self
    {
        $this->destipaddr = $destipaddr;

        return $this;
    }

    public function getOriginalcalledpartynumber(): ?int
    {
        return $this->originalcalledpartynumber;
    }

    public function setOriginalcalledpartynumber(?int $originalcalledpartynumber): self
    {
        $this->originalcalledpartynumber = $originalcalledpartynumber;

        return $this;
    }

    public function getFinalcalledpartynumber(): ?int
    {
        return $this->finalcalledpartynumber;
    }

    public function setFinalcalledpartynumber(?int $finalcalledpartynumber): self
    {
        $this->finalcalledpartynumber = $finalcalledpartynumber;

        return $this;
    }

    public function getFinalcalledpartyunicodeloginuserid(): ?string
    {
        return $this->finalcalledpartyunicodeloginuserid;
    }

    public function setFinalcalledpartyunicodeloginuserid(?string $finalcalledpartyunicodeloginuserid): self
    {
        $this->finalcalledpartyunicodeloginuserid = $finalcalledpartyunicodeloginuserid;

        return $this;
    }

    public function getDestcauseLocation(): ?int
    {
        return $this->destcauseLocation;
    }

    public function setDestcauseLocation(?int $destcauseLocation): self
    {
        $this->destcauseLocation = $destcauseLocation;

        return $this;
    }

    public function getDestcauseValue(): ?int
    {
        return $this->destcauseValue;
    }

    public function setDestcauseValue(?int $destcauseValue): self
    {
        $this->destcauseValue = $destcauseValue;

        return $this;
    }

    public function getDestprecedencelevel(): ?int
    {
        return $this->destprecedencelevel;
    }

    public function setDestprecedencelevel(?int $destprecedencelevel): self
    {
        $this->destprecedencelevel = $destprecedencelevel;

        return $this;
    }

    public function getDestmediatransportaddressIp(): ?int
    {
        return $this->destmediatransportaddressIp;
    }

    public function setDestmediatransportaddressIp(?int $destmediatransportaddressIp): self
    {
        $this->destmediatransportaddressIp = $destmediatransportaddressIp;

        return $this;
    }

    public function getDestmediatransportaddressPort(): ?int
    {
        return $this->destmediatransportaddressPort;
    }

    public function setDestmediatransportaddressPort(?int $destmediatransportaddressPort): self
    {
        $this->destmediatransportaddressPort = $destmediatransportaddressPort;

        return $this;
    }

    public function getDestmediacapPayloadcapability(): ?int
    {
        return $this->destmediacapPayloadcapability;
    }

    public function setDestmediacapPayloadcapability(?int $destmediacapPayloadcapability): self
    {
        $this->destmediacapPayloadcapability = $destmediacapPayloadcapability;

        return $this;
    }

    public function getDestmediacapMaxframesperpacket(): ?int
    {
        return $this->destmediacapMaxframesperpacket;
    }

    public function setDestmediacapMaxframesperpacket(?int $destmediacapMaxframesperpacket): self
    {
        $this->destmediacapMaxframesperpacket = $destmediacapMaxframesperpacket;

        return $this;
    }

    public function getDestmediacapG723bitrate(): ?int
    {
        return $this->destmediacapG723bitrate;
    }

    public function setDestmediacapG723bitrate(?int $destmediacapG723bitrate): self
    {
        $this->destmediacapG723bitrate = $destmediacapG723bitrate;

        return $this;
    }

    public function getDestvideocapCodec(): ?int
    {
        return $this->destvideocapCodec;
    }

    public function setDestvideocapCodec(?int $destvideocapCodec): self
    {
        $this->destvideocapCodec = $destvideocapCodec;

        return $this;
    }

    public function getDestvideocapBandwidth(): ?int
    {
        return $this->destvideocapBandwidth;
    }

    public function setDestvideocapBandwidth(?int $destvideocapBandwidth): self
    {
        $this->destvideocapBandwidth = $destvideocapBandwidth;

        return $this;
    }

    public function getDestvideocapResolution(): ?int
    {
        return $this->destvideocapResolution;
    }

    public function setDestvideocapResolution(?int $destvideocapResolution): self
    {
        $this->destvideocapResolution = $destvideocapResolution;

        return $this;
    }

    public function getDestvideotransportaddressIp(): ?int
    {
        return $this->destvideotransportaddressIp;
    }

    public function setDestvideotransportaddressIp(?int $destvideotransportaddressIp): self
    {
        $this->destvideotransportaddressIp = $destvideotransportaddressIp;

        return $this;
    }

    public function getDestvideotransportaddressPort(): ?int
    {
        return $this->destvideotransportaddressPort;
    }

    public function setDestvideotransportaddressPort(?int $destvideotransportaddressPort): self
    {
        $this->destvideotransportaddressPort = $destvideotransportaddressPort;

        return $this;
    }

    public function getDestrsvpaudiostat(): ?int
    {
        return $this->destrsvpaudiostat;
    }

    public function setDestrsvpaudiostat(?int $destrsvpaudiostat): self
    {
        $this->destrsvpaudiostat = $destrsvpaudiostat;

        return $this;
    }

    public function getDestrsvpvideostat(): ?int
    {
        return $this->destrsvpvideostat;
    }

    public function setDestrsvpvideostat(?int $destrsvpvideostat): self
    {
        $this->destrsvpvideostat = $destrsvpvideostat;

        return $this;
    }

    public function getDatetimeconnect(): ?int
    {
        return $this->datetimeconnect;
    }

    public function setDatetimeconnect(?int $datetimeconnect): self
    {
        $this->datetimeconnect = $datetimeconnect;

        return $this;
    }

    public function getDatetimedisconnect(): ?int
    {
        return $this->datetimedisconnect;
    }

    public function setDatetimedisconnect(?int $datetimedisconnect): self
    {
        $this->datetimedisconnect = $datetimedisconnect;

        return $this;
    }

    public function getLastredirectdn(): ?int
    {
        return $this->lastredirectdn;
    }

    public function setLastredirectdn(?int $lastredirectdn): self
    {
        $this->lastredirectdn = $lastredirectdn;

        return $this;
    }

    public function getPkid(): ?string
    {
        return $this->pkid;
    }

    public function setPkid(?string $pkid): self
    {
        $this->pkid = $pkid;

        return $this;
    }

    public function getOriginalcalledpartynumberpartition(): ?string
    {
        return $this->originalcalledpartynumberpartition;
    }

    public function setOriginalcalledpartynumberpartition(?string $originalcalledpartynumberpartition): self
    {
        $this->originalcalledpartynumberpartition = $originalcalledpartynumberpartition;

        return $this;
    }

    public function getCallingpartynumberpartition(): ?string
    {
        return $this->callingpartynumberpartition;
    }

    public function setCallingpartynumberpartition(?string $callingpartynumberpartition): self
    {
        $this->callingpartynumberpartition = $callingpartynumberpartition;

        return $this;
    }

    public function getFinalcalledpartynumberpartition(): ?string
    {
        return $this->finalcalledpartynumberpartition;
    }

    public function setFinalcalledpartynumberpartition(?string $finalcalledpartynumberpartition): self
    {
        $this->finalcalledpartynumberpartition = $finalcalledpartynumberpartition;

        return $this;
    }

    public function getLastredirectdnpartition(): ?string
    {
        return $this->lastredirectdnpartition;
    }

    public function setLastredirectdnpartition(?string $lastredirectdnpartition): self
    {
        $this->lastredirectdnpartition = $lastredirectdnpartition;

        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getOrigdevicename(): ?string
    {
        return $this->origdevicename;
    }

    public function setOrigdevicename(?string $origdevicename): self
    {
        $this->origdevicename = $origdevicename;

        return $this;
    }

    public function getDestdevicename(): ?string
    {
        return $this->destdevicename;
    }

    public function setDestdevicename(?string $destdevicename): self
    {
        $this->destdevicename = $destdevicename;

        return $this;
    }

    public function getOrigcallterminationonbehalfof(): ?int
    {
        return $this->origcallterminationonbehalfof;
    }

    public function setOrigcallterminationonbehalfof(?int $origcallterminationonbehalfof): self
    {
        $this->origcallterminationonbehalfof = $origcallterminationonbehalfof;

        return $this;
    }

    public function getDestcallterminationonbehalfof(): ?int
    {
        return $this->destcallterminationonbehalfof;
    }

    public function setDestcallterminationonbehalfof(?int $destcallterminationonbehalfof): self
    {
        $this->destcallterminationonbehalfof = $destcallterminationonbehalfof;

        return $this;
    }

    public function getOrigcalledpartyredirectonbehalfof(): ?int
    {
        return $this->origcalledpartyredirectonbehalfof;
    }

    public function setOrigcalledpartyredirectonbehalfof(?int $origcalledpartyredirectonbehalfof): self
    {
        $this->origcalledpartyredirectonbehalfof = $origcalledpartyredirectonbehalfof;

        return $this;
    }

    public function getLastredirectredirectonbehalfof(): ?int
    {
        return $this->lastredirectredirectonbehalfof;
    }

    public function setLastredirectredirectonbehalfof(?int $lastredirectredirectonbehalfof): self
    {
        $this->lastredirectredirectonbehalfof = $lastredirectredirectonbehalfof;

        return $this;
    }

    public function getOrigcalledpartyredirectreason(): ?int
    {
        return $this->origcalledpartyredirectreason;
    }

    public function setOrigcalledpartyredirectreason(?int $origcalledpartyredirectreason): self
    {
        $this->origcalledpartyredirectreason = $origcalledpartyredirectreason;

        return $this;
    }

    public function getLastredirectredirectreason(): ?int
    {
        return $this->lastredirectredirectreason;
    }

    public function setLastredirectredirectreason(?int $lastredirectredirectreason): self
    {
        $this->lastredirectredirectreason = $lastredirectredirectreason;

        return $this;
    }

    public function getDestconversationid(): ?int
    {
        return $this->destconversationid;
    }

    public function setDestconversationid(?int $destconversationid): self
    {
        $this->destconversationid = $destconversationid;

        return $this;
    }

    public function getGlobalcallidClusterid(): ?string
    {
        return $this->globalcallidClusterid;
    }

    public function setGlobalcallidClusterid(?string $globalcallidClusterid): self
    {
        $this->globalcallidClusterid = $globalcallidClusterid;

        return $this;
    }

    public function getJoinonbehalfof(): ?int
    {
        return $this->joinonbehalfof;
    }

    public function setJoinonbehalfof(?int $joinonbehalfof): self
    {
        $this->joinonbehalfof = $joinonbehalfof;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getAuthcodedescription(): ?string
    {
        return $this->authcodedescription;
    }

    public function setAuthcodedescription(?string $authcodedescription): self
    {
        $this->authcodedescription = $authcodedescription;

        return $this;
    }

    public function getAuthorizationlevel(): ?int
    {
        return $this->authorizationlevel;
    }

    public function setAuthorizationlevel(?int $authorizationlevel): self
    {
        $this->authorizationlevel = $authorizationlevel;

        return $this;
    }

    public function getClientmattercode(): ?string
    {
        return $this->clientmattercode;
    }

    public function setClientmattercode(?string $clientmattercode): self
    {
        $this->clientmattercode = $clientmattercode;

        return $this;
    }

    public function getOrigdtmfmethod(): ?int
    {
        return $this->origdtmfmethod;
    }

    public function setOrigdtmfmethod(?int $origdtmfmethod): self
    {
        $this->origdtmfmethod = $origdtmfmethod;

        return $this;
    }

    public function getDestdtmfmethod(): ?int
    {
        return $this->destdtmfmethod;
    }

    public function setDestdtmfmethod(?int $destdtmfmethod): self
    {
        $this->destdtmfmethod = $destdtmfmethod;

        return $this;
    }

    public function getCallsecuredstatus(): ?int
    {
        return $this->callsecuredstatus;
    }

    public function setCallsecuredstatus(?int $callsecuredstatus): self
    {
        $this->callsecuredstatus = $callsecuredstatus;

        return $this;
    }

    public function getOrigconversationid(): ?int
    {
        return $this->origconversationid;
    }

    public function setOrigconversationid(?int $origconversationid): self
    {
        $this->origconversationid = $origconversationid;

        return $this;
    }

    public function getOrigmediacapBandwidth(): ?int
    {
        return $this->origmediacapBandwidth;
    }

    public function setOrigmediacapBandwidth(?int $origmediacapBandwidth): self
    {
        $this->origmediacapBandwidth = $origmediacapBandwidth;

        return $this;
    }

    public function getDestmediacapBandwidth(): ?int
    {
        return $this->destmediacapBandwidth;
    }

    public function setDestmediacapBandwidth(?int $destmediacapBandwidth): self
    {
        $this->destmediacapBandwidth = $destmediacapBandwidth;

        return $this;
    }

    public function getAuthorizationcodevalue(): ?string
    {
        return $this->authorizationcodevalue;
    }

    public function setAuthorizationcodevalue(?string $authorizationcodevalue): self
    {
        $this->authorizationcodevalue = $authorizationcodevalue;

        return $this;
    }

    public function getOutpulsedcallingpartynumber(): ?string
    {
        return $this->outpulsedcallingpartynumber;
    }

    public function setOutpulsedcallingpartynumber(?string $outpulsedcallingpartynumber): self
    {
        $this->outpulsedcallingpartynumber = $outpulsedcallingpartynumber;

        return $this;
    }

    public function getOutpulsedcalledpartynumber(): ?string
    {
        return $this->outpulsedcalledpartynumber;
    }

    public function setOutpulsedcalledpartynumber(?string $outpulsedcalledpartynumber): self
    {
        $this->outpulsedcalledpartynumber = $outpulsedcalledpartynumber;

        return $this;
    }

    public function getOrigipv4v6addr(): ?string
    {
        return $this->origipv4v6addr;
    }

    public function setOrigipv4v6addr(?string $origipv4v6addr): self
    {
        $this->origipv4v6addr = $origipv4v6addr;

        return $this;
    }

    public function getDestipv4v6addr(): ?string
    {
        return $this->destipv4v6addr;
    }

    public function setDestipv4v6addr(?string $destipv4v6addr): self
    {
        $this->destipv4v6addr = $destipv4v6addr;

        return $this;
    }

    public function getOrigvideocapCodecChannel2(): ?int
    {
        return $this->origvideocapCodecChannel2;
    }

    public function setOrigvideocapCodecChannel2(?int $origvideocapCodecChannel2): self
    {
        $this->origvideocapCodecChannel2 = $origvideocapCodecChannel2;

        return $this;
    }

    public function getOrigvideocapBandwidthChannel2(): ?int
    {
        return $this->origvideocapBandwidthChannel2;
    }

    public function setOrigvideocapBandwidthChannel2(?int $origvideocapBandwidthChannel2): self
    {
        $this->origvideocapBandwidthChannel2 = $origvideocapBandwidthChannel2;

        return $this;
    }

    public function getOrigvideocapResolutionChannel2(): ?int
    {
        return $this->origvideocapResolutionChannel2;
    }

    public function setOrigvideocapResolutionChannel2(?int $origvideocapResolutionChannel2): self
    {
        $this->origvideocapResolutionChannel2 = $origvideocapResolutionChannel2;

        return $this;
    }

    public function getOrigvideotransportaddressIpChannel2(): ?int
    {
        return $this->origvideotransportaddressIpChannel2;
    }

    public function setOrigvideotransportaddressIpChannel2(?int $origvideotransportaddressIpChannel2): self
    {
        $this->origvideotransportaddressIpChannel2 = $origvideotransportaddressIpChannel2;

        return $this;
    }

    public function getOrigvideotransportaddressPortChannel2(): ?int
    {
        return $this->origvideotransportaddressPortChannel2;
    }

    public function setOrigvideotransportaddressPortChannel2(?int $origvideotransportaddressPortChannel2): self
    {
        $this->origvideotransportaddressPortChannel2 = $origvideotransportaddressPortChannel2;

        return $this;
    }

    public function getOrigvideochannelRoleChannel2(): ?int
    {
        return $this->origvideochannelRoleChannel2;
    }

    public function setOrigvideochannelRoleChannel2(?int $origvideochannelRoleChannel2): self
    {
        $this->origvideochannelRoleChannel2 = $origvideochannelRoleChannel2;

        return $this;
    }

    public function getDestvideocapCodecChannel2(): ?int
    {
        return $this->destvideocapCodecChannel2;
    }

    public function setDestvideocapCodecChannel2(?int $destvideocapCodecChannel2): self
    {
        $this->destvideocapCodecChannel2 = $destvideocapCodecChannel2;

        return $this;
    }

    public function getDestvideocapBandwidthChannel2(): ?int
    {
        return $this->destvideocapBandwidthChannel2;
    }

    public function setDestvideocapBandwidthChannel2(?int $destvideocapBandwidthChannel2): self
    {
        $this->destvideocapBandwidthChannel2 = $destvideocapBandwidthChannel2;

        return $this;
    }

    public function getDestvideocapResolutionChannel2(): ?int
    {
        return $this->destvideocapResolutionChannel2;
    }

    public function setDestvideocapResolutionChannel2(?int $destvideocapResolutionChannel2): self
    {
        $this->destvideocapResolutionChannel2 = $destvideocapResolutionChannel2;

        return $this;
    }

    public function getDestvideotransportaddressIpChannel2(): ?int
    {
        return $this->destvideotransportaddressIpChannel2;
    }

    public function setDestvideotransportaddressIpChannel2(?int $destvideotransportaddressIpChannel2): self
    {
        $this->destvideotransportaddressIpChannel2 = $destvideotransportaddressIpChannel2;

        return $this;
    }

    public function getDestvideotransportaddressPortChannel2(): ?int
    {
        return $this->destvideotransportaddressPortChannel2;
    }

    public function setDestvideotransportaddressPortChannel2(?int $destvideotransportaddressPortChannel2): self
    {
        $this->destvideotransportaddressPortChannel2 = $destvideotransportaddressPortChannel2;

        return $this;
    }

    public function getDestvideochannelRoleChannel2(): ?int
    {
        return $this->destvideochannelRoleChannel2;
    }

    public function setDestvideochannelRoleChannel2(?int $destvideochannelRoleChannel2): self
    {
        $this->destvideochannelRoleChannel2 = $destvideochannelRoleChannel2;

        return $this;
    }

    public function getIncomingprotocolid(): ?int
    {
        return $this->incomingprotocolid;
    }

    public function setIncomingprotocolid(?int $incomingprotocolid): self
    {
        $this->incomingprotocolid = $incomingprotocolid;

        return $this;
    }

    public function getIncomingprotocolcallref(): ?string
    {
        return $this->incomingprotocolcallref;
    }

    public function setIncomingprotocolcallref(?string $incomingprotocolcallref): self
    {
        $this->incomingprotocolcallref = $incomingprotocolcallref;

        return $this;
    }

    public function getOutgoingprotocolid(): ?int
    {
        return $this->outgoingprotocolid;
    }

    public function setOutgoingprotocolid(?int $outgoingprotocolid): self
    {
        $this->outgoingprotocolid = $outgoingprotocolid;

        return $this;
    }

    public function getOutgoingprotocolcallref(): ?string
    {
        return $this->outgoingprotocolcallref;
    }

    public function setOutgoingprotocolcallref(?string $outgoingprotocolcallref): self
    {
        $this->outgoingprotocolcallref = $outgoingprotocolcallref;

        return $this;
    }

    public function getCurrentroutingreason(): ?int
    {
        return $this->currentroutingreason;
    }

    public function setCurrentroutingreason(?int $currentroutingreason): self
    {
        $this->currentroutingreason = $currentroutingreason;

        return $this;
    }

    public function getOrigroutingreason(): ?int
    {
        return $this->origroutingreason;
    }

    public function setOrigroutingreason(?int $origroutingreason): self
    {
        $this->origroutingreason = $origroutingreason;

        return $this;
    }

    public function getLastredirectingroutingreason(): ?int
    {
        return $this->lastredirectingroutingreason;
    }

    public function setLastredirectingroutingreason(?int $lastredirectingroutingreason): self
    {
        $this->lastredirectingroutingreason = $lastredirectingroutingreason;

        return $this;
    }

    public function getHuntpilotdn(): ?string
    {
        return $this->huntpilotdn;
    }

    public function setHuntpilotdn(?string $huntpilotdn): self
    {
        $this->huntpilotdn = $huntpilotdn;

        return $this;
    }

    public function getHuntpilotpartition(): ?string
    {
        return $this->huntpilotpartition;
    }

    public function setHuntpilotpartition(?string $huntpilotpartition): self
    {
        $this->huntpilotpartition = $huntpilotpartition;

        return $this;
    }

    public function getCalledpartypatternusage(): ?int
    {
        return $this->calledpartypatternusage;
    }

    public function setCalledpartypatternusage(?int $calledpartypatternusage): self
    {
        $this->calledpartypatternusage = $calledpartypatternusage;

        return $this;
    }

    public function getOutpulsedoriginalcalledpartynumber(): ?string
    {
        return $this->outpulsedoriginalcalledpartynumber;
    }

    public function setOutpulsedoriginalcalledpartynumber(?string $outpulsedoriginalcalledpartynumber): self
    {
        $this->outpulsedoriginalcalledpartynumber = $outpulsedoriginalcalledpartynumber;

        return $this;
    }

    public function getOutpulsedlastredirectingnumber(): ?string
    {
        return $this->outpulsedlastredirectingnumber;
    }

    public function setOutpulsedlastredirectingnumber(?string $outpulsedlastredirectingnumber): self
    {
        $this->outpulsedlastredirectingnumber = $outpulsedlastredirectingnumber;

        return $this;
    }

    public function getWascallqueued(): ?int
    {
        return $this->wascallqueued;
    }

    public function setWascallqueued(?int $wascallqueued): self
    {
        $this->wascallqueued = $wascallqueued;

        return $this;
    }

    public function getTotalwaittimeinqueue(): ?int
    {
        return $this->totalwaittimeinqueue;
    }

    public function setTotalwaittimeinqueue(?int $totalwaittimeinqueue): self
    {
        $this->totalwaittimeinqueue = $totalwaittimeinqueue;

        return $this;
    }

    public function getCallingpartynumberUri(): ?string
    {
        return $this->callingpartynumberUri;
    }

    public function setCallingpartynumberUri(?string $callingpartynumberUri): self
    {
        $this->callingpartynumberUri = $callingpartynumberUri;

        return $this;
    }

    public function getOriginalcalledpartynumberUri(): ?string
    {
        return $this->originalcalledpartynumberUri;
    }

    public function setOriginalcalledpartynumberUri(?string $originalcalledpartynumberUri): self
    {
        $this->originalcalledpartynumberUri = $originalcalledpartynumberUri;

        return $this;
    }

    public function getFinalcalledpartynumberUri(): ?string
    {
        return $this->finalcalledpartynumberUri;
    }

    public function setFinalcalledpartynumberUri(?string $finalcalledpartynumberUri): self
    {
        $this->finalcalledpartynumberUri = $finalcalledpartynumberUri;

        return $this;
    }

    public function getLastredirectdnUri(): ?string
    {
        return $this->lastredirectdnUri;
    }

    public function setLastredirectdnUri(?string $lastredirectdnUri): self
    {
        $this->lastredirectdnUri = $lastredirectdnUri;

        return $this;
    }

    public function getMobilecallingpartynumber(): ?string
    {
        return $this->mobilecallingpartynumber;
    }

    public function setMobilecallingpartynumber(?string $mobilecallingpartynumber): self
    {
        $this->mobilecallingpartynumber = $mobilecallingpartynumber;

        return $this;
    }

    public function getFinalmobilecalledpartynumber(): ?string
    {
        return $this->finalmobilecalledpartynumber;
    }

    public function setFinalmobilecalledpartynumber(?string $finalmobilecalledpartynumber): self
    {
        $this->finalmobilecalledpartynumber = $finalmobilecalledpartynumber;

        return $this;
    }

    public function getOrigmobiledevicename(): ?string
    {
        return $this->origmobiledevicename;
    }

    public function setOrigmobiledevicename(?string $origmobiledevicename): self
    {
        $this->origmobiledevicename = $origmobiledevicename;

        return $this;
    }

    public function getDestmobiledevicename(): ?string
    {
        return $this->destmobiledevicename;
    }

    public function setDestmobiledevicename(?string $destmobiledevicename): self
    {
        $this->destmobiledevicename = $destmobiledevicename;

        return $this;
    }

    public function getOrigmobilecallduration(): ?int
    {
        return $this->origmobilecallduration;
    }

    public function setOrigmobilecallduration(?int $origmobilecallduration): self
    {
        $this->origmobilecallduration = $origmobilecallduration;

        return $this;
    }

    public function getDestmobilecallduration(): ?int
    {
        return $this->destmobilecallduration;
    }

    public function setDestmobilecallduration(?int $destmobilecallduration): self
    {
        $this->destmobilecallduration = $destmobilecallduration;

        return $this;
    }

    public function getMobilecalltype(): ?int
    {
        return $this->mobilecalltype;
    }

    public function setMobilecalltype(?int $mobilecalltype): self
    {
        $this->mobilecalltype = $mobilecalltype;

        return $this;
    }

    public function getOriginalcalledpartypattern(): ?string
    {
        return $this->originalcalledpartypattern;
    }

    public function setOriginalcalledpartypattern(?string $originalcalledpartypattern): self
    {
        $this->originalcalledpartypattern = $originalcalledpartypattern;

        return $this;
    }

    public function getFinalcalledpartypattern(): ?string
    {
        return $this->finalcalledpartypattern;
    }

    public function setFinalcalledpartypattern(?string $finalcalledpartypattern): self
    {
        $this->finalcalledpartypattern = $finalcalledpartypattern;

        return $this;
    }

    public function getLastredirectingpartypattern(): ?string
    {
        return $this->lastredirectingpartypattern;
    }

    public function setLastredirectingpartypattern(?string $lastredirectingpartypattern): self
    {
        $this->lastredirectingpartypattern = $lastredirectingpartypattern;

        return $this;
    }

    public function getHuntpilotpattern(): ?string
    {
        return $this->huntpilotpattern;
    }

    public function setHuntpilotpattern(?string $huntpilotpattern): self
    {
        $this->huntpilotpattern = $huntpilotpattern;

        return $this;
    }


}
