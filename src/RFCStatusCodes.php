<?php

namespace HttpStatusCodes;

/**
 * Full info you can find https://tools.ietf.org/html/rfc2616
 *
 * Class RFCCodes
 * @package HttpStatusCodes
 */
class RFCStatusCodes
{
    /**
     * @rfc 2616
     * @description The server intends to send a final response after the request has been fully received and acted upon.
     * @message Continue
     */
    const HTTP_CONTINUE = 100;

    /**
     * @rfc 2616
     * @description The server will only agree to switch protocols when it is advantageous to do so.
     */
    const HTTP_SWITCHING_PROTOCOLS = 101;

    /**
     * @rfc 2518
     * @description This status code SHOULD only be sent when the server has a reasonable expectation that the request will take significant time to complete.
     */
    const HTTP_PROCESSING = 102;

    /**
     * @rfc 2616
     * @description Status code indicates that the request has succeeded.
     * @message OK
     */
    const HTTP_OK = 200;

    /**
     * @rfc 2616
     * @description Status code indicates that the request has been fulfilled and has resulted in one or more new resources being created.
     */
    const HTTP_CREATED = 201;

    /**
     * @rfc 2616
     * @description Status code indicates that the request has been accepted for processing, but the processing has not been completed.
     */
    const HTTP_ACCEPTED = 202;

    /**
     * @rfc 2616
     * @description This status code allows the proxy to notify recipients when a transformation has been applied, since that knowledge might impact later decisions regarding the content.
     * @message Non-Authoritative Information
     */
    const HTTP_NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * @rfc 2616
     * @description Indicates that the server has successfully fulfilled the request and that there is no additional content to send in the response payload body.
     */
    const HTTP_NO_CONTENT = 204;

    /**
     * @rfc 2616
     * @description Indicates that the server has fulfilled the request and desires that the user agent reset the "document view", which caused the request to be sent, to its original state as received from the origin server.
     */
    const HTTP_RESET_CONTENT = 205;

    /**
     * @rfc 7233
     * @description Indicates that the server is successfully fulfilling a range request for the target resource by transferring one or more parts of the selected representation.
     */
    const HTTP_PARTIAL_CONTENT = 206;

    /**
     * @rfc 4918
     * @description Status code provides status for multiple independent operations.
     */
    const HTTP_MULTI_STATUS = 207;

    /**
     * @rfc 5842
     * @description Status code can be used inside a DAV.
     */
    const HTTP_ALREADY_REPORTED = 208;

    /**
     * @rfc 3229
     * @description The server has fulfilled a GET request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.
     */
    const HTTP_IM_USED = 226;

    /**
     * @rfc 2616
     * @description Status code indicates that the target resource has more than one representation.
     */
    const HTTP_MULTIPLE_CHOICES = 300;

    /**
     * @rfc 2616
     * @description Status code indicates that the target resource has been assigned a new permanent URI and any future references to this resource ought to use one of the enclosed URIs.
     */
    const HTTP_MOVED_PERMANENTLY = 301;

    /**
     * @rfc 2616
     * @description Status code indicates that the target resource resides temporarily under a different URI.  Since the redirection might be altered on occasion, the client ought to continue to use the effective request URI for future requests.
     */
    const HTTP_FOUND = 302;

    /**
     * @rfc 2616
     * @description Status code indicates that the server is redirecting the user agent to a different resource, as indicated by a URI in the Location header field, which is intended to provide an indirect response to the original request.
     */
    const HTTP_SEE_OTHER = 303;

    /**
     * @rfc 2616
     * @description If the client has performed a conditional GET request and access is allowed, but the document has not been modified, the server SHOULD respond with this status code.
     */
    const HTTP_NOT_MODIFIED = 304;

    /**
     * @rfc 2616
     * @description The requested resource MUST be accessed through the proxy given by the Location field. The Location field gives the URI of the proxy.
     */
    const HTTP_USE_PROXY = 305;

    /**
     * @rfc 2616
     * @description The 306 status code was used in a previous version of the specification, is no longer used, and the code is reserved.
     * @deprecated
     */
    const HTTP_RESERVED = 306;

    /**
     * @rfc 2616
     * @description The requested resource resides temporarily under a different URI. Since the redirection MAY be altered on occasion, the client SHOULD continue to use the Request-URI for future requests.
     */
    const HTTP_TEMPORARY_REDIRECT = 307;

    /**
     * @rfc 7238
     * @description Status code indicates that the target resource has been assigned a new permanent URI and any future references to this resource ought to use one of the enclosed URIs.
     */
    const HTTP_PERMANENT_REDIRECT = 308;

    /**
     * @rfc 2616
     * @description The request could not be understood by the server due to malformed syntax. The client SHOULD NOT repeat the request without modifications.
     */
    const HTTP_BAD_REQUEST = 400;

    /**
     * @rfc 2616
     * @description The request requires user authentication. The response MUST include a WWW-Authenticate header field containing a challenge applicable to the requested resource.
     */
    const HTTP_UNAUTHORIZED = 401;

    /**
     * @rfc 2616
     * @description This code is reserved for future use.
     */
    const HTTP_PAYMENT_REQUIRED = 402;

    /**
     * @rfc 2616
     * @description The server understood the request, but is refusing to fulfill it. Authorization will not help and the request SHOULD NOT be repeated.
     */
    const HTTP_FORBIDDEN = 403;

    /**
     * @rfc 2616
     * @description The server has not found anything matching the Request-URI.
     */
    const HTTP_NOT_FOUND = 404;

    /**
     * @rfc 2616
     * @description The method specified in the Request-Line is not allowed for the resource identified by the Request-URI.
     */
    const HTTP_METHOD_NOT_ALLOWED = 405;

    /**
     * @rfc 2616
     * @description The resource identified by the request is only capable of generating response entities which have content characteristics not acceptable according to the accept headers sent in the request.
     */
    const HTTP_NOT_ACCEPTABLE = 406;

    /**
     * @rfc 2616
     * @description This code is similar to 401 (Unauthorized), but indicates that the client must first authenticate itself with the proxy. The proxy MUST return a Proxy-Authenticate header field containing a challenge applicable to the proxy for the requested resource.
     */
    const HTTP_PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * @rfc 2616
     * @description The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat the request without modifications at any later time.
     */
    const HTTP_REQUEST_TIMEOUT = 408;

    /**
     * @rfc 2616
     * @description The request could not be completed due to a conflict with the current state of the resource. This code is only allowed in situations where it is expected that the user might be able to resolve the conflict and resubmit the request.
     */
    const HTTP_CONFLICT = 409;

    /**
     * @rfc 2616
     * @description The requested resource is no longer available at the server and no forwarding address is known.
     */
    const HTTP_GONE = 410;

    /**
     * @rfc 2616
     * @description The server refuses to accept the request without a defined Content-Length.
     */
    const HTTP_LENGTH_REQUIRED = 411;

    /**
     * @rfc 2616
     * @description The precondition given in one or more of the request-header fields evaluated to false when it was tested on the server.
     */
    const HTTP_PRECONDITION_FAILED = 412;

    /**
     * @rfc 2616
     * @description The server is refusing to process a request because the request entity is larger than the server is willing or able to process.
     */
    const HTTP_PAYLOAD_TOO_LARGE = 413;

    /**
     * @rfc 2616
     * @description The server is refusing to service the request because the Request-URI is longer than the server is willing to interpret.
     */
    const HTTP_URI_TOO_LONG = 414;

    /**
     * @rfc 2616
     * @description The server is refusing to service the request because the entity of the request is in a format not supported by the requested resource for the requested method.
     */
    const HTTP_UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * @rfc 2616
     * @description A server SHOULD return a response with this status code if a request included a Range request-header field, and none of the range-specifier values in this field overlap the current extent of the selected resource, and the request did not include an If-Range request-header field.
     */
    const HTTP_RANGE_NOT_SATISFIABLE = 416;

    /**
     * @rfc 2616
     * @description The expectation given in an Expect request-header field could not be met by this server, or, if the server is a proxy, the server has unambiguous evidence that the request could not be met by the next-hop server.
     */
    const HTTP_EXPECTATION_FAILED = 417;

    /**
     * @rfc 2324
     * @description Any attempt to brew coffee with a teapot should result in the error code "418 I'm a teapot". The resulting entity body MAY be short and stout.
     */
    const HTTP_IM_A_TEAPOT = 418;

    /**
     * @rfc 7540
     * @description Status code indicates that the request was directed at a server that is not able to produce a response.
     */
    const HTTP_MISDIRECTED_REQUEST = 421;

    /**
     * @rfc 4918
     * @description Status code means the server understands the content type of the request entity but was unable to process the contained instructions.
     */
    const HTTP_UNPROCESSABLE_ENTITY = 422;

    /**
     * @rfc 4918
     * @description Status code means the source or destination resource of a method is locked.  This response SHOULD contain an appropriate precondition or postcondition code, such as 'lock-token-submitted' or 'no-conflicting-lock'.
     */
    const HTTP_LOCKED = 423;

    /**
     * @rfc 4918
     * @description Status code means that the method could not be performed on the resource because the requested action depended on another action and that action failed.
     */
    const HTTP_FAILED_DEPENDENCY = 424;

    /**
     * @rfc 8470
     * @description Status code indicates that the server is unwilling to risk processing a request that might be replayed.
     */
    const HTTP_TOO_EARLY = 425;

    /**
     * @rfc 2817
     * @description Used to indicate a preference or requirement to switch to a different version of HTTP or to another protocol.
     */
    const HTTP_UPGRADE_REQUIRED = 426;

    /**
     * @rfc 6585
     * @description Status code indicates that the origin server requires the request to be conditional.
     */
    const HTTP_PRECONDITION_REQUIRED = 428;

    /**
     * @rfc 6585
     * @description Status code indicates that the user has sent too many requests in a given amount of time ("rate limiting").
     */
    const HTTP_TOO_MANY_REQUESTS = 429;

    /**
     * @rfc 6585
     * @description Status code indicates that the server is unwilling to process the request because its header fields are too large.
     */
    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * @rfc 6585
     * @description Status code indicates that the server is denying access to the resource as a consequence of a legal demand.
     */
    const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * @rfc 2616
     * @description The server encountered an unexpected condition which prevented it from fulfilling the request.
     */
    const HTTP_INTERNAL_SERVER_ERROR = 500;

    /**
     * @rfc 2616
     * @description The server does not support the functionality required to fulfill the request. This is the appropriate response when the server does not recognize the request method and is not capable of supporting it for  any resource.
     */
    const HTTP_NOT_IMPLEMENTED = 501;

    /**
     * @rfc 2616
     * @description The server, while acting as a gateway or proxy, received an invalid response from the upstream server it accessed in attempting to fulfill the request.
     */
    const HTTP_BAD_GATEWAY = 502;

    /**
     * @rfc 2616
     * @description  The server is currently unable to handle the request due to a
    temporary overloading or maintenance of the server.
     */
    const HTTP_SERVICE_UNAVAILABLE = 503;

    /**
     * @rfc 2616
     * @description  The server, while acting as a gateway or proxy, did not receive a timely response from the upstream server specified by the URI (e.g. HTTP, FTP, LDAP) or some other auxiliary server (e.g. DNS) it needed to access in attempting to complete the request.
     */
    const HTTP_GATEWAY_TIMEOUT = 504;

    /**
     * @rfc 2616
     * @description  The server does not support, or refuses to support, the HTTP protocol version that was used in the request message.
     */
    const HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * @rfc 2295
     * @description Status code indicates that the server has an internal configuration error: the chosen variant resource is configured to engage in transparent content negotiation itself, and is therefore not a proper end point in the negotiation process.
     */
    const HTTP_VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * @rfc 4918
     * @description Status code means the method could not be performed on the resource because the server is unable to store the representation needed to successfully complete the request.
     */
    const HTTP_INSUFFICIENT_STORAGE = 507;

    /**
     * @rfc 5842
     * @description Status code indicates that the server terminated an operation because it encountered an infinite loop while processing a request with "Depth: infinity".  This status indicates that the entire operation failed.
     */
    const HTTP_LOOP_DETECTED = 508;

    /**
     * @rfc 2774
     * @description The policy for accessing the resource has not been met in the request.  The server should send back all the information necessary for the client to issue an extended request. It is outside the scope of this specification to specify how the extensions inform the client.
     */
    const HTTP_NOT_EXTENDED = 510;

    /**
     * @rfc 6585
     * @description Status code indicates that the client needs to authenticate to gain network access.
     */
    const HTTP_NETWORK_AUTHENTICATION_REQUIRED = 511;
}